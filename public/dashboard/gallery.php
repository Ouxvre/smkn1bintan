<?php
session_start();
include '../../config/config.php';

// Proses upload
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];

    $targetDir = "../assets/image/gallery/"; // dari public/dashboard/ → ke assets
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $fileName = time() . "_" . basename($_FILES["image"]["name"]);
    $targetFilePath = $targetDir . $fileName;

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
        $sql = "INSERT INTO gallery (title, image) VALUES ('$title', '$fileName')";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['message'] = "Foto berhasil diupload!";
            $_SESSION['status'] = "success";
        } else {
            $_SESSION['message'] = "Gagal menyimpan ke database.";
            $_SESSION['status'] = "error";
        }
    } else {
        $_SESSION['message'] = "Upload gagal!";
        $_SESSION['status'] = "error";
    }

    header("Location: gallery.php");
    exit();
}

// ambil data galeri
$result = mysqli_query($conn, "SELECT * FROM gallery ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Gallery</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        .sidebar {
            height: 100vh;
            background: #2d3b61;
            color: #fff;
            padding: 20px 0;
            position: fixed;
            width: 250px;
        }
        .sidebar h4 { font-weight: bold; }
        .sidebar a {
            color: #fff;
            display: block;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 8px;
            margin: 5px 10px;
            transition: all 0.3s ease;
        }
        .sidebar a:hover { background: rgba(255, 255, 255, 0.2); }
        .content { margin-left: 250px; padding: 20px; min-height: 100vh; }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center mb-4">Admin Panel</h4>
        <a href="../dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
        <a href="users.php"><i class="fa fa-users"></i> Users</a>
        <a href="berita.php"><i class="fa fa-newspaper"></i> Berita</a>
        <a href="gallery.php" class="bg-primary"><i class="fa fa-bullhorn"></i> Gallery</a>
        <a href="#"><i class="fa fa-calendar"></i> Agenda</a>
        <a href="#"><i class="fa fa-cogs"></i> Settings</a>
        <a href="/smkn1bintan/auth/logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
    </div>

    <div class="content">
        <div class="container-fluid">
            <h2 class="mb-4">Kelola Galeri</h2>

            <!-- Form Upload -->
            <div class="card mb-4">
                <div class="card-header">Tambah Foto</div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul Foto</label>
                            <input type="text" class="form-control" name="title" id="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Pilih Foto</label>
                            <input type="file" class="form-control" name="image" id="image" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>

            <!-- List Galeri -->
            <div class="card">
                <div class="card-header">Daftar Foto</div>
                <div class="card-body">
                    <div class="row">
                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img src="../assets/image/gallery/<?= $row['image'] ?>" 
                                         class="card-img-top" style="height:150px;object-fit:cover;">
                                    <div class="card-body">
                                        <h6 class="card-title"><?= $row['title'] ?></h6>
                                        <form method="post" action="../../crud/gallery/gallery_delete.php" class="delete-form">
                                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
// SweetAlert notif setelah upload/delete
<?php if (isset($_SESSION['message'])): ?>
    Swal.fire({
        icon: '<?= $_SESSION['status'] ?>',
        title: '<?= $_SESSION['message'] ?>',
        showConfirmButton: false,
        timer: 2000
    });
    <?php unset($_SESSION['message']); unset($_SESSION['status']); ?>
<?php endif; ?>

// SweetAlert konfirmasi delete
document.querySelectorAll('.delete-form').forEach(form => {
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        Swal.fire({
            title: 'Yakin hapus foto ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, Hapus',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
});
</script>
</body>
</html>

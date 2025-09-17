<?php
include '../../config/config.php';

$alertMsg = "";
$alertType = "";

if (isset($_POST['simpan'])) {
    $judul    = mysqli_real_escape_string($conn, $_POST['judul']);
    $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
    $isi      = mysqli_real_escape_string($conn, $_POST['isi']);

    $gambar = $_FILES['gambar']['name'];
    $tmp    = $_FILES['gambar']['tmp_name'];
    $folder = "../assets/image/" . $gambar;

    if (!empty($gambar)) {
        if (move_uploaded_file($tmp, $folder)) {
            $sql = "INSERT INTO berita (judul, kategori, isi, gambar, tanggal) 
                    VALUES ('$judul', '$kategori', '$isi', '$gambar', NOW())";
        } else {
            $alertMsg = "❌ Upload gambar gagal!";
            $alertType = "error";
        }
    } else {
        $sql = "INSERT INTO berita (judul, kategori, isi, tanggal) 
                VALUES ('$judul', '$kategori', '$isi', NOW())";
    }

    if (empty($alertMsg)) {
        if ($conn->query($sql) === TRUE) {
            $alertMsg = "✅ Berita berhasil ditambahkan!";
            $alertType = "success";
        } else {
            $alertMsg = "❌ SQL Error: " . $conn->error;
            $alertType = "error";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Berita</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
    /* === Sidebar === */
    .sidebar {
        height: 100vh;
        background: #2d3b61;
        color: #fff;
        padding: 20px 0;
        position: fixed;
        width: 250px;
        top: 0;
        left: 0;
    }

    .sidebar h4 {
        font-weight: bold;
        margin-bottom: 25px;
        text-align: center;
    }

    .sidebar a {
        color: #fff;
        display: block;
        padding: 12px 20px;
        text-decoration: none;
        border-radius: 6px;
        margin: 5px 10px;
        transition: all 0.3s ease;
    }

    .sidebar a:hover,
    .sidebar a.active {
        background: #007bff;
        /* biru solid */
    }

    /* === CONTENT === */
    .content {
        margin-left: 260px;
        padding: 40px;
    }

    .content h2 {
        font-size: 22px;
        font-weight: 700;
        color: #2d3b61;
        margin-bottom: 25px;
    }

    /* === FORM === */
    label {
        font-weight: 600;
        margin-bottom: 6px;
        display: block;
        color: #333;
    }

    input[type="text"],
    select,
    textarea,
    input[type="file"] {
        width: 100%;
        padding: 12px 14px;
        border: none;
        border-radius: 8px;
        background: #f5f6fa;
        font-size: 14px;
        margin-bottom: 18px;
        outline: none;
        transition: all 0.3s ease;
    }

    input[type="text"]:focus,
    select:focus,
    textarea:focus,
    input[type="file"]:focus {
        background: #eef3ff;
        box-shadow: 0 0 0 2px #007bff55;
    }

    /* === BUTTON === */
    button {
        background: #007bff;
        color: #fff;
        border: none;
        padding: 12px 18px;
        border-radius: 8px;
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.3s ease, transform 0.2s;
    }

    button:hover {
        background: #0056b3;
        transform: translateY(-2px);
    }

    .alert {
        position: fixed;
        top: 20px;
        right: -400px;
        /* awalnya sembunyi di kanan */
        background: #28a745;
        /* hijau sukses */
        color: white;
        padding: 15px 25px;
        border-radius: 5px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        font-size: 16px;
        transition: right 0.5s ease-in-out;
        z-index: 9999;
    }

    .alert.error {
        background: #dc3545;
        /* merah error */
    }

    .alert.show {
        right: 20px;
        /* geser masuk */
    }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center mb-4">Admin Panel</h4>
        <a href="../dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
        <a href="users.php"><i class="fa fa-users"></i> Users</a>
        <a href="berita.php" class="active"><i class="fa fa-newspaper"></i> Berita</a>
        <a href="#"><i class="fa fa-bullhorn"></i> Pengumuman</a>
        <a href="#"><i class="fa fa-calendar"></i> Agenda</a>
        <a href="#"><i class="fa fa-cogs"></i> Settings</a>
        <a href="../auth/logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
    </div>

    <!-- Content -->
    <div class="content">
        <h2><i class="fa fa-newspaper"></i> Tambah Berita</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label><i class="fa fa-heading"></i> Judul Berita</label>
                <input type="text" name="judul" placeholder="Masukkan judul berita..." required>
            </div>
            <div class="form-group">
                <label><i class="fa fa-list"></i> Kategori</label>
                <select name="kategori" required>
                    <option value="berita">Berita</option>
                    <option value="prestasi">Prestasi</option>
                    <option value="informasi">Informasi</option>
                </select>
            </div>
            <div class="form-group">
                <label><i class="fa fa-align-left"></i> Isi Berita</label>
                <textarea name="isi" rows="6" placeholder="Tulis isi berita di sini..." required></textarea>
            </div>
            <div class="form-group">
                <label><i class="fa fa-image"></i> Upload Gambar</label>
                <input type="file" name="gambar" accept="image/*">
            </div>
            <button type="submit" name="simpan"><i class="fa fa-save"></i> Simpan Berita</button>
        </form>
    </div>

    <script>
    function showAlert(message, type = "success") {
        let alertBox = document.createElement("div");
        alertBox.className = "alert " + (type === "error" ? "error" : "");
        alertBox.innerText = message;
        document.body.appendChild(alertBox);

        setTimeout(() => {
            alertBox.classList.add("show");
        }, 10);

        setTimeout(() => {
            alertBox.classList.remove("show");
            setTimeout(() => alertBox.remove(), 500);
        }, 3000);
    }

    <?php if (!empty($alertMsg)) { ?>
    showAlert("<?= $alertMsg ?>", "<?= $alertType ?>");
    <?php } ?>
    </script>
</body>

</html>
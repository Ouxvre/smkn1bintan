<?php
include '../../config/config.php';

$alertMsg = "";
$alertType = "";

if (isset($_POST['simpan'])) {
    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
    $isi = mysqli_real_escape_string($conn, $_POST['isi']);

    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];
    $folder = "../../public/assets/image/berita/" . $gambar;

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
            header("Location: ../../public/dashboard/berita.php"); // balik ke halaman daftar berita
            exit;
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
    <title>Dashboard - Tambah Berita</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        .form-container {
            max-width: 600px;
            width: 100%;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <!-- Content -->
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="form-container">
            <h2 class="text-center mb-4"><i class="fa fa-newspaper"></i> Tambah Berita</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label><i class="fa fa-heading"></i> Judul Berita</label>
                    <input type="text" name="judul" class="form-control" placeholder="Masukkan judul berita..."
                        required>
                </div>
                <div class="form-group mb-3">
                    <label><i class="fa fa-list"></i> Kategori</label>
                    <select name="kategori" class="form-control" required>
                        <option value="berita">Berita</option>
                        <option value="prestasi">Prestasi</option>
                        <option value="informasi">Informasi</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label><i class="fa fa-align-left"></i> Isi Berita</label>
                    <textarea name="isi" rows="6" class="form-control" placeholder="Tulis isi berita di sini..."
                        required></textarea>
                </div>
                <div class="form-group mb-3">
                    <label><i class="fa fa-image"></i> Upload Gambar</label>
                    <input type="file" name="gambar" class="form-control" accept="image/*">
                </div>
                <button type="submit" name="simpan" class="btn btn-primary w-100"><i class="fa fa-save"></i> Simpan
                    Berita</button>
            </form>
        </div>
    </div>
</body>

</html>
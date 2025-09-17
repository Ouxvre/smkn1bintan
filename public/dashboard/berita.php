<?php include("../../config/config.php"); ?>
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Tambah Berita</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <label>Judul Berita:</label><br>
        <input type="text" name="judul" required><br><br>

        <label>Kategori:</label><br>
        <select name="kategori" required>
            <option value="berita">Berita</option>
            <option value="prestasi">Prestasi</option>
            <option value="informasi">Informasi</option>
        </select><br><br>

        <label>Isi Berita:</label><br>
        <textarea name="isi" rows="5" required></textarea><br><br>

        <label>Upload Gambar:</label><br>
        <input type="file" name="gambar" accept="image/*"><br><br>

        <button type="submit" name="simpan">Simpan</button>
    </form>

<?php
if (isset($_POST['simpan'])) {
    $judul    = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $isi      = $_POST['isi'];

    // Upload gambar
    $gambar = $_FILES['gambar']['name'];
    $tmp    = $_FILES['gambar']['tmp_name'];
    $folder = "../assets/image/" . $gambar;

    if (move_uploaded_file($tmp, $folder)) {
        // Simpan ke database
        $sql = "INSERT INTO berita (judul, kategori, isi, gambar, tanggal)
                VALUES ('$judul', '$kategori', '$isi', '$gambar', NOW())";

        if ($conn->query($sql) === TRUE) {
            echo "✅ Berita berhasil ditambahkan!";
        } else {
            echo "❌ SQL Error: " . $conn->error;
        }
    } else {
        echo "❌ Upload gambar gagal!";
    }
}
?>
</body>
</html>

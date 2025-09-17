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
    <style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background: #f1f4f9;
        margin: 0;
        padding: 30px;
    }

    .card {
        max-width: 600px;
        margin: 0 auto;
        background: #fff;
        padding: 25px 30px;
        border-radius: 12px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
    }

    .card h2 {
        margin-bottom: 20px;
        font-size: 22px;
        text-align: center;
        color: #333;
    }

    .form-group {
        margin-bottom: 18px;
    }

    label {
        font-weight: 600;
        margin-bottom: 6px;
        display: block;
        color: #555;
    }

    input[type="text"],
    select,
    textarea,
    input[type="file"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 14px;
        transition: 0.2s;
    }

    input:focus,
    select:focus,
    textarea:focus {
        border-color: #007bff;
        outline: none;
        box-shadow: 0 0 4px rgba(0, 123, 255, 0.3);
    }

    button {
        width: 100%;
        background: #007bff;
        color: #fff;
        border: none;
        padding: 12px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    button:hover {
        background: #0056b3;
    }

    /* Container alert */
    .alert {
        position: fixed;
        top: 20px;
        right: -400px;
        /* awalnya di luar layar */
        min-width: 300px;
        padding: 15px 20px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 500;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        color: #fff;
        z-index: 9999;
        animation: slideIn 0.6s forwards, fadeOut 0.6s forwards 4s;
    }

    /* Warna sukses & error */
    .alert.success {
        background: #2ecc71;
    }

    .alert.error {
        background: #e74c3c;
    }

    /* Animasi slide-in */
    @keyframes slideIn {
        from {
            right: -400px;
            opacity: 0;
        }

        to {
            right: 20px;
            opacity: 1;
        }
    }

    /* Animasi fade-out */
    @keyframes fadeOut {
        from {
            right: 20px;
            opacity: 1;
        }

        to {
            right: -400px;
            opacity: 0;
        }
    }
    </style>
</head>

<body>
    <div class="card">
        <h2>📰 Tambah Berita</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Judul Berita</label>
                <input type="text" name="judul" required>
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <select name="kategori" required>
                    <option value="berita">Berita</option>
                    <option value="prestasi">Prestasi</option>
                    <option value="informasi">Informasi</option>
                </select>
            </div>

            <div class="form-group">
                <label>Isi Berita</label>
                <textarea name="isi" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label>Upload Gambar</label>
                <input type="file" name="gambar" accept="image/*">
            </div>

            <button type="submit" name="simpan">➕ Simpan Berita</button>
        </form>
    </div>


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
        $sql = "INSERT INTO berita (judul, kategori, isi, gambar, tanggal)
                VALUES ('$judul', '$kategori', '$isi', '$gambar', NOW())";

        if ($conn->query($sql) === TRUE) {
            echo '<div class="alert success">✅ Berita berhasil ditambahkan!</div>';
        } else {
            echo '<div class="alert error">❌ SQL Error: ' . $conn->error . '</div>';
        }
    } else {
        echo '<div class="alert error">❌ Upload gambar gagal!</div>';
    }
}
?>


</body>

</html>
<?php
session_start();
include("../../config/config.php");

// Hapus berita
if (isset($_GET['hapus'])) {
    $id = intval($_GET['hapus']);

    // Ambil data berita dulu (buat cek file gambar)
    $res = $conn->query("SELECT gambar FROM berita WHERE id = $id");
    if ($res && $res->num_rows > 0) {
        $row = $res->fetch_assoc();
        $gambar = $row['gambar'];

        // Hapus file gambar kalau ada
        $path = "../assets/image/berita/" . $gambar;
        if (!empty($gambar) && file_exists($path)) {
            unlink($path); // hapus file fisik
        }
    }

    // Baru hapus dari database
    $sql = "DELETE FROM berita WHERE id = $id";
    if ($conn->query($sql)) {
        $msg = "✅ Berita berhasil dihapus!";
    } else {
        $msg = "❌ Gagal menghapus: " . $conn->error;
    }
}


// Ambil semua berita
$result = $conn->query("SELECT * FROM berita ORDER BY tanggal DESC");
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
        <a href="gallery.php"><i class="fa fa-bullhorn"></i> Gallery</a>
        <a href="#"><i class="fa fa-calendar"></i> Agenda</a>
        <a href="#"><i class="fa fa-cogs"></i> Settings</a>
        <a href="../auth/logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
    </div>

    <!-- Content -->
    <div class="content p-4">
        <h2><i class="fa fa-newspaper"></i> Daftar Berita</h2>

        <?php if (!empty($msg)): ?>
            <div class="alert alert-info"><?= $msg ?></div>
        <?php endif; ?>

        <a href="../../crud/berita/add_berita.php" class="btn btn-primary mb-3">
            <i class="fa fa-plus"></i> Tambah Berita
        </a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php $no = 1; while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= htmlspecialchars($row['judul']) ?></td>
                            <td>
                                <?php if($row['kategori'] == "berita"): ?>
                                    <span class="badge bg-primary">Berita</span>
                                <?php elseif($row['kategori'] == "prestasi"): ?>
                                    <span class="badge bg-success">Prestasi</span>
                                <?php else: ?>
                                    <span class="badge bg-info">Informasi</span>
                                <?php endif; ?>
                            </td>
                            <td><?= $row['tanggal'] ?></td>
                            <td>
                                <?php if(!empty($row['gambar'])): ?>
                                    <img src="../assets/image/berita/<?= $row['gambar'] ?>" width="80">
                                <?php else: ?>
                                    <span class="text-muted">-</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="edit_berita.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <a href="berita.php?hapus=<?= $row['id'] ?>" 
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Yakin ingin hapus berita ini?')">
                                   <i class="fa fa-trash"></i> Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">Belum ada berita</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

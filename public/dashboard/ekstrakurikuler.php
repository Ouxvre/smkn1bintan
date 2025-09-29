<?php
include '../../config/config.php';

if (isset($_GET['delete'])) {
    $id = (int) $_GET['delete'];

    $result = mysqli_query($conn, "SELECT foto FROM ekstrakurikuler WHERE id=$id");
    $data   = mysqli_fetch_assoc($result);

    if ($data && $data['foto'] && $data['foto'] !== 'default.png') {
        $filePath = __DIR__ . "/../assets/image/ekstrakurikuler/" . $data['foto'];
        if (file_exists($filePath)) {
            unlink($filePath);
        }
    }

    // Hapus data dari database
    mysqli_query($conn, "DELETE FROM ekstrakurikuler WHERE id=$id");

    header("Location: ekstrakurikuler.php?msg=deleted");
    exit;
}


$result = mysqli_query($conn, "SELECT * FROM ekstrakurikuler ORDER BY created_at DESC");
?>

<head>
    <meta charset="UTF-8">
    <title>Dashboard - Ekstrakurikuler</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
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
    }

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
    </style>
</head>

<body class="bg-light">
    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center mb-4">Admin Panel</h4>
        <a href="../dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
        <a href="../dashboard/users.php"><i class="fa fa-users"></i> Users</a>
        <a href="../dashboard/berita.php"><i class="fa fa-newspaper"></i> Berita</a>
        <a href="../dashboard/gallery.php"><i class="fa-solid fa-images"></i> Gallery</a>
        <a href="../dashboard/ekstrakurikuler.php"><i class="fa-solid fa-images"></i> Ekstrakurikuler</a>
        <a href="../dashboard/staff.php"><i class="fa fa-user-tie"></i> Staff</a>
        <a href="#"><i class="fa fa-cogs"></i> Settings</a>
        <a href="/smkn1bintan/auth/logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
    </div>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Manajemen Ekstrakurikuler</h2>
            <a href="../../crud/ekstrakurikuler/ekstrakurikuler_add.php" class="btn btn-success">Add</a>
        </div>

        <table class="table table-hover table-bordered bg-white shadow-sm rounded">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Pembina</th>
                    <th>Jadwal</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= htmlspecialchars($row['nama']) ?></td>
                    <td><?= htmlspecialchars($row['pembina']) ?></td>
                    <td><?= htmlspecialchars($row['jadwal']) ?></td>
                    <td><?= htmlspecialchars($row['deskripsi']) ?></td>
                    <td>
                        <img src="../assets/image/ekstrakurikuler/<?= htmlspecialchars($row['foto']) ?>" width="40"
                            height="40" style="object-fit: cover; border-radius: 8px;">

                    </td>

                    <td>
                        <a href="../../crud/ekstrakurikuler/ekstrakurikuler_edit.php?id=<?= $row['id'] ?>"
                            class="btn btn-warning btn-sm">✏ Edit</a>

                        <a href="ekstrakurikuler.php?delete=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus?')"
                            class="btn btn-danger btn-sm">🗑 Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
<?php
include '../../config/config.php';

// Ambil data staff
$result = $conn->query("SELECT * FROM staff ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD - Staff</title>

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

        .sidebar h4 {
            font-weight: bold;
        }

        .sidebar a {
            color: #fff;
            display: block;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 8px;
            margin: 5px 10px;
            transition: all 0.3s ease;
        }

        .sidebar a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .content {
            margin-left: 260px;
            padding: 20px;
        }

        .table img {
            border-radius: 6px;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center mb-4">Admin Panel</h4>
        <a href="../../public/dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
        <a href="../../public/dashboard/users.php"><i class="fa fa-users"></i> Users</a>
        <a href="../../public/dashboard/berita.php"><i class="fa fa-newspaper"></i> Berita</a>
        <a href="../../public/dashboard/gallery.php"><i class="fa fa-bullhorn"></i> Gallery</a>
        <a href="../dashboard/ekstrakurikuler.php"><i class="fa fa-school me-2"></i> Ekstrakurikuler</a>
        <a href="../../public/dashboard/staff.php" class="bg-primary"><i class="fa fa-user-tie"></i> Staff</a>
        <a href="#"><i class="fa fa-cogs"></i> Settings</a>
        <a href="/smkn1bintan/auth/logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
    </div>

    <!-- Content -->
    <div class="content">
        <h3 class="mb-4">📋 Daftar Staff</h3>

        <a href="../../crud/staff/add_staff.php" class="btn btn-primary mb-3">
            <i class="fa fa-plus"></i> Tambah Staff
        </a>

        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Role</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= htmlspecialchars($row['nama']); ?></td>
                        <td><?= htmlspecialchars($row['jabatan']); ?></td>
                        <td>
                            <?php
                            // kasih badge warna
                            $role = $row['role'];
                            $warna = "secondary";
                            if ($role == "kepala_sekolah") $warna = "danger";
                            elseif ($role == "wakil_kepala") $warna = "warning";
                            elseif ($role == "kepala_program") $warna = "info";
                            elseif ($role == "guru") $warna = "success";
                            elseif ($role == "tenaga_kependidikan") $warna = "primary";
                            ?>
                            <span class="badge bg-<?= $warna ?>">
                                <?= ucfirst(str_replace("_", " ", $role)); ?>
                            </span>
                        </td>
                        <td>
                            <?php if (!empty($row['foto'])): ?>
                                <img src="../assets/image/staff/<?= $row['foto'] ?>" width="80" class="rounded">
                            <?php else: ?>
                                <img src="../assets/image/default.jpeg" width="80" class="rounded">
                            <?php endif; ?>
                        </td>

                        <td>
                            <a href="../../crud/staff/edit_staff.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">
                                <i class="fa fa-edit"></i> Edit
                            </a>

                            <a href="../../crud/staff/delete_staff.php?id=<?= $row['id']; ?>"
                                onclick="return confirm('Yakin hapus data ini?')"
                                class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i> Hapus
                            </a>

                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
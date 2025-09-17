<?php
// Dummy data user, nanti bisa diganti dengan database
$users = [
    ["id" => 1, "username" => "admin", "role" => "Admin", "email" => "admin@smkn1.ac.id"],
    ["id" => 2, "username" => "editor", "role" => "Editor", "email" => "editor@smkn1.ac.id"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Users</title>

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
    </style>
</head>

<body>
    
    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center mb-4">Admin Panel</h4>
        <a href="../dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
        <a href="users.php" class="bg-primary"><i class="fa fa-users"></i> Users</a>
        <a href="berita.php"><i class="fa fa-newspaper"></i> Berita</a>
        <a href="#"><i class="fa fa-bullhorn"></i> Pengumuman</a>
        <a href="#"><i class="fa fa-calendar"></i> Agenda</a>
        <a href="#"><i class="fa fa-cogs"></i> Settings</a>
        <a href="../auth/logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
    </div>

    <!-- Content -->
    <div class="p-4" style="margin-left:250px;">
        <h2>Manajemen Users</h2>
        <hr>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>
                    <tr>
                        <td><?= $user["id"] ?></td>
                        <td><?= $user["username"] ?></td>
                        <td><?= $user["email"] ?></td>
                        <td>
                            <span class="badge <?= $user["role"] == "Admin" ? "bg-primary" : "bg-success" ?>">
                                <?= $user["role"] ?>
                            </span>
                        </td>
                        <td>
                            <a href="edit_user.php?id=<?= $user["id"] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete_user.php?id=<?= $user["id"] ?>" class="btn btn-danger btn-sm"
                               onclick="return confirm('Yakin ingin hapus user ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="add_user.php" class="btn btn-success">+ Tambah User</a>
    </div>
</body>
</html>

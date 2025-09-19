<?php
include '../include/admin_only.php';
include '../../config/config.php';


// Ambil data users dari tabel
$result = mysqli_query($conn, "SELECT * FROM users");

$users = [];
while ($row = mysqli_fetch_assoc($result)) {
    $users[] = $row;
}
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
    <a href="../../public/dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
    <a href="../dashboard/users.php" class="bg-primary"><i class="fa fa-users"></i> Users</a>
    <a href="../dashboard/berita.php"><i class="fa fa-newspaper"></i> Berita</a>
    <a href="../dashboard/gallery.php"><i class="fa fa-bullhorn"></i> Gallery</a>
    <a href="../dashboard/staff.php"><i class="fa fa-user-tie"></i> Staff</a>
    <a href="#"><i class="fa fa-cogs"></i> Settings</a>
    <a href="/smkn1bintan/auth/logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
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
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $user["id"] ?></td>
                        <td><?= $user["username"] ?></td>
                        <td><?= $user["email"] ?></td>
                        <td>
                            <span class="badge <?= $user["role"] == "Admin" ? "bg-primary" : "bg-success" ?>">
                                <?= $user["role"] ?>
                            </span>
                        </td>

                        <td class="d-flex justify-content-center">
                            <?php
                            if (!empty($user["profile_pic"])) {
                                $fotoPath = "../" . $user["profile_pic"];
                            } else {
                                $fotoPath = "../assets/image/profile/default.jpeg";
                            }
                            ?>
                            <img src="<?= $fotoPath ?>" width="40" height="40" class="rounded-circle border"
                                style="object-fit: cover;">
                        </td>



                        <td>
                            <a href="../../crud/users/edit_user.php?id=<?= $user["id"] ?>"
                                class="btn btn-warning btn-sm">Edit</a>
                            <a href="../../crud/users/delete_user.php?id=<?= $user["id"] ?>" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin hapus user ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
        <a href="../register.php" class="btn btn-success">+ Tambah User</a>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if (isset($_GET['status']) && $_GET['status'] == 'deleted'): ?>
    <script>
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: 'User berhasil dihapus',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true
        });
    </script>
<?php endif; ?>

</html>
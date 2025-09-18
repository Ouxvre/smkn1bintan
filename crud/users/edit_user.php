<?php
include '../../config/config.php';
include '../../public/include/admin_only.php';

// Ambil data user berdasarkan id
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
    $user = mysqli_fetch_assoc($result);
} else {
    echo "ID tidak ditemukan!";
    exit;
}
?>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id       = $_POST['id'];
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $role     = $_POST['role'];

    // Default query tanpa password
    $sql = "UPDATE users SET username='$username', email='$email', role='$role' WHERE id=$id";

    // Kalau password diisi
    if (!empty($_POST['password'])) {
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $sql = "UPDATE users SET username='$username', email='$email', role='$role', password='$password' WHERE id=$id";
    }

    // 🚀 Proses upload foto
    if (isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] == 0) {
        $uploadDir = ($role == "Admin") 
            ? "../../assets/image/profile/admin_profile/" 
            : "../../assets/image/profile/editor_profile/";

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $fileName = time() . "_" . basename($_FILES['profile_pic']['name']);
        $targetFile = $uploadDir . $fileName;

        if (move_uploaded_file($_FILES['profile_pic']['tmp_name'], $targetFile)) {
            // path relatif untuk database
            $profilePath = "assets/image/profile/" . 
                           ($role == "Admin" ? "admin_profile/" : "editor_profile/") . 
                           $fileName;

            $sql = "UPDATE users SET username='$username', email='$email', role='$role', profile_pic='$profilePath' WHERE id=$id";

            if (!empty($_POST['password'])) {
                $sql = "UPDATE users SET username='$username', email='$email', role='$role', password='$password', profile_pic='$profilePath' WHERE id=$id";
            }
        }
    }

    if (mysqli_query($conn, $sql)) {
        header("Location: ../../public/dashboard/users.php?status=updated");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">
    <h2>Edit User</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">

        <div class="mb-3">
            <label>Username</label>
            <input type="text" name="username" value="<?= $user['username'] ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="<?= $user['email'] ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Role</label>
            <select name="role" class="form-control">
                <option value="Admin" <?= $user['role'] == 'Admin' ? 'selected' : '' ?>>Admin</option>
                <option value="Editor" <?= $user['role'] == 'Editor' ? 'selected' : '' ?>>Editor</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Password (Kosongkan jika tidak ingin ganti)</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="mb-3">
            <label>Foto Profil</label><br>
            <?php if (!empty($user['profile_pic'])): ?>
                <img src="../../<?= $user['profile_pic'] ?>" alt="Foto Profil" width="80" class="mb-2 rounded"><br>
            <?php endif; ?>
            <input type="file" name="profile_pic" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="../../public/dashboard/users.php" class="btn btn-secondary">Batal</a>
    </form>

</body>

</html>
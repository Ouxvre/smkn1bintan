<?php
session_start();
include("../config/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role     = $_POST['role'] ?? 'Editor';

    // --- Tentukan folder sesuai role ---
    if ($role === "Admin") {
        $folder_abs = "../public/assets/image/profile/admin_profile/";  // untuk simpan file
        $folder_rel = "assets/image/profile/admin_profile/";            // untuk DB
    } else {
        $folder_abs = "../public/assets/image/profile/editor_profile/";
        $folder_rel = "assets/image/profile/editor_profile/";
    }

    // --- Pastikan folder ada ---
    if (!is_dir($folder_abs)) {
        mkdir($folder_abs, 0777, true);
    }

    // --- Handle upload foto ---
    $profile_pic = null;
    if (!empty($_FILES['foto']['name'])) {
        $file_name = $_FILES['foto']['name'];
        $file_tmp  = $_FILES['foto']['tmp_name'];

        // nama file unik
        $unique_name = time() . "_" . preg_replace("/[^a-zA-Z0-9\._-]/", "", $file_name);
        $target_abs  = $folder_abs . $unique_name;

        if (move_uploaded_file($file_tmp, $target_abs)) {
            $profile_pic = $folder_rel . $unique_name; // simpan path relatif
        } else {
            $_SESSION['error'] = "Upload foto gagal!";
            header("Location: ../public/register.php");
            exit;
        }
    }

    // --- Simpan ke database ---
    $sql = "INSERT INTO users (username, email, password, role, profile_pic) 
            VALUES ('$username', '$email', '$password', '$role', " . 
            ($profile_pic ? "'$profile_pic'" : "NULL") . ")";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['success'] = "Registrasi berhasil, silakan login.";
        header("Location: ../public/dashboard/users.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

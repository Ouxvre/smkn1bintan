<?php
session_start();
include("../config/config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = mysqli_real_escape_string($conn, $_POST['username']); 
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$input' OR email='$input' LIMIT 1";
    $res = mysqli_query($conn, $sql);

    if ($res && mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);

        if (password_verify($password, $row['password'])) {
            // ✅ Simpan session
            $_SESSION['user_id']    = $row['id'];        // <-- penting
            $_SESSION['username']   = $row['username'];
            $_SESSION['role']       = $row['role'];

            // handle foto
            if (!empty($row['profile_pic'])) {
                if ($row['role'] === 'Admin') {
                    $_SESSION['profile_pic'] = '../assets/image/profile/admin_profile/' . $row['profile_pic'];
                } else {
                    $_SESSION['profile_pic'] = '../assets/image/profile/editor_profile/' . $row['profile_pic'];
                }
            } else {
                $_SESSION['profile_pic'] = '../assets/image/profile/default.jpeg';
            }

            header("Location: /smkn1bintan/public/dashboard.php");

            exit;
        } else {
            $error = "Password salah.";
        }
    } else {
        $error = "User tidak ditemukan.";
    }
}
?>
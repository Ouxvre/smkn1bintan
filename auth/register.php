<?php
session_start();
include("../config/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role     = $_POST['role'] ?? 'Editor';

    $sql = "INSERT INTO users (username, email, password, role) 
            VALUES ('$username', '$email', '$password', '$role')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['success'] = "Registrasi berhasil, silakan login.";
        header("Location: ../public/login.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

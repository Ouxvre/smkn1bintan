<?php
session_start();
include("../config/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];

    $sql    = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id']  = $row['id'];     
            $_SESSION['username'] = $row['username'];
            $_SESSION['role']     = $row['role'];

            if ($row['role'] == "admin") {
                header("Location: ../public/dashboard/dashboard.php");
            } else {
                header("Location: ../public/index.php");
            }
            exit;
        } else {
            echo "❌ Password salah!";
        }
    } else {
        echo "❌ Username tidak ditemukan!";
    }
}
?>

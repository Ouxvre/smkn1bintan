<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit;
}

$username = $_SESSION['username'] ?? '';
$role     = $_SESSION['role'] ?? '';
?>

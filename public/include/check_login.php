<?php
session_start();

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");

if (!isset($_SESSION['user_id'])) {
    header("Location: ../public/login.php");
    exit;
}

$username = $_SESSION['username'] ?? '';
$role     = $_SESSION['role'] ?? '';

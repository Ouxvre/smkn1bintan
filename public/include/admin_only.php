<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}

if ($_SESSION['role'] !== 'Admin') {
    echo "Akses ditolak! Halaman ini hanya untuk Admin.";
    exit();
}
?>
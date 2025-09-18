<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}

// Cek role user, hanya admin yang boleh
if ($_SESSION['role'] !== 'Admin') {
    echo "Akses ditolak! Halaman ini hanya untuk Admin.";
    exit();
}
?>
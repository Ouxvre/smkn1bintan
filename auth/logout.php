<?php
session_start();

// Hapus semua data session
$_SESSION = [];
session_unset();
session_destroy();

// Arahkan ke halaman login
header("Location: ../public/login.php");
exit;
?>

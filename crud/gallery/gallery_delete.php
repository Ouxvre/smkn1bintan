<?php
session_start();
include("../../config/config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);

    $query = mysqli_query($conn, "SELECT image FROM gallery WHERE id = $id");
    $row = mysqli_fetch_assoc($query);

    if ($row) {
        $filePath = __DIR__ . "/../../assets/image/gallery/" . $row['image'];

        $delete = mysqli_query($conn, "DELETE FROM gallery WHERE id = $id");

        if ($delete) {
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            $_SESSION['message'] = "Foto berhasil dihapus!";
            $_SESSION['status'] = "success";
        } else {
            $_SESSION['message'] = "Gagal menghapus data.";
            $_SESSION['status'] = "error";
        }
    } else {
        $_SESSION['message'] = "Foto tidak ditemukan.";
        $_SESSION['status'] = "error";
    }

    header("Location: ../../public/dashboard/gallery.php");
    exit();
} else {
    header("Location: ../../public/dashboard/gallery.php");
    exit();
}
?>

<?php
include '../../config/config.php'; // koneksi

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    // cari foto biar bisa dihapus juga
    $result = mysqli_query($conn, "SELECT foto FROM staff WHERE id=$id");
    $data = mysqli_fetch_assoc($result);

    if ($data && !empty($data['foto'])) {
        $file_path = "../../public/assets/image/staff/" . $data['foto'];
        if (file_exists($file_path)) {
            unlink($file_path); // hapus file fisik
        }
    }

    // hapus dari database
    mysqli_query($conn, "DELETE FROM staff WHERE id=$id");
}

// redirect balik ke halaman staff
header("Location: ../../public/dashboard/staff.php");
exit;
?>

<?php
include '../../config/config.php';
include '../include/admin_only.php';
session_start();

// Cek apakah ada id di URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Jangan sampai admin menghapus dirinya sendiri
    if ($_SESSION['user_id'] == $id) {
        echo "Tidak bisa menghapus akun sendiri!";
        exit;
    }

    // Ambil data user dulu (supaya tahu role + foto)
    $sql = "SELECT role, profile_pic FROM users WHERE id = $id";
    $res = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($res);

    if ($user) {
        // tentukan folder sesuai role
        if ($user['role'] === 'Admin') {
            $folder = "../../public/assets/image/profile/admin_profile/";
        } else {
            $folder = "../../public/assets/image/profile/editor_profile/";
        }

        // hapus file foto jika ada
        if (!empty($user['profile_pic'])) {
            $filepath = $folder . $user['profile_pic'];
            if (file_exists($filepath)) {
                unlink($filepath);
            }
        }

        // Hapus user dari database
        $delete_sql = "DELETE FROM users WHERE id = $id";
        if (mysqli_query($conn, $delete_sql)) {
            header("Location: ../../public/dashboard/users.php?status=deleted");
            exit;
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "User tidak ditemukan!";
    }
} else {
    echo "ID user tidak ditemukan!";
}
?>

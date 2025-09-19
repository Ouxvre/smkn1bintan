<?php
include '../../config/config.php';

if (!isset($_GET['id'])) {
    header("Location: ../../public/dashboard/staff.php");
    exit;
}

$id = (int) $_GET['id'];

// Ambil data lama
$result = mysqli_query($conn, "SELECT * FROM staff WHERE id=$id");
$staff = mysqli_fetch_assoc($result);

if (!$staff) {
    echo "<script>alert('Data staff tidak ditemukan!'); window.location='../../public/dashboard/staff.php';</script>";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama    = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $role    = $_POST['role'];
    $foto    = $staff['foto']; // default foto lama

    // Folder upload
    $target_dir = "../../public/assets/image/staff/";

    if (!empty($_FILES["foto"]["name"])) {
        // Hapus foto lama
        if (!empty($staff['foto']) && file_exists($target_dir . $staff['foto'])) {
            unlink($target_dir . $staff['foto']);
        }

        // Upload foto baru
        $foto = time() . "_" . basename($_FILES["foto"]["name"]);
        $target_file = $target_dir . $foto;

        if (!move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
            echo "<script>alert('Upload foto gagal!'); window.history.back();</script>";
            exit;
        }
    }

    // Update database
    $query = "UPDATE staff SET nama='$nama', jabatan='$jabatan', role='$role', foto='$foto' WHERE id=$id";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data staff berhasil diperbarui!'); window.location='../../public/dashboard/staff.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Staff</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h3>Edit Staff</h3>
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" value="<?= htmlspecialchars($staff['nama']) ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Jabatan</label>
            <input type="text" name="jabatan" value="<?= htmlspecialchars($staff['jabatan']) ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Role</label>
            <select name="role" class="form-control" required>
                <option value="kepala_sekolah" <?= $staff['role'] == 'kepala_sekolah' ? 'selected' : '' ?>>Kepala Sekolah</option>
                <option value="wakil_kepala" <?= $staff['role'] == 'wakil_kepala' ? 'selected' : '' ?>>Wakil Kepala</option>
                <option value="kepala_program" <?= $staff['role'] == 'kepala_program' ? 'selected' : '' ?>>Kepala Program</option>
                <option value="guru" <?= $staff['role'] == 'guru' ? 'selected' : '' ?>>Guru</option>
                <option value="tenaga_kependidikan" <?= $staff['role'] == 'tenaga_kependidikan' ? 'selected' : '' ?>>Tenaga Kependidikan</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Foto</label><br>
            <?php if (!empty($staff['foto'])): ?>
                <img src="../../public/assets/image/staff/<?= $staff['foto'] ?>" width="100" class="mb-2">
            <?php endif; ?>
            <input type="file" name="foto" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="../../public/dashboard/staff.php" class="btn btn-secondary">Batal</a>
    </form>

</body>
</html>

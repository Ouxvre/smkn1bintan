<?php
include '../../config/config.php';

$id = (int) $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM ekstrakurikuler WHERE id=$id");
$data = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $pembina = $_POST['pembina'];
    $jadwal = $_POST['jadwal'];
    $deskripsi = $_POST['deskripsi'];

    $foto = $data['foto'];
    if (!empty($_FILES['foto']['name'])) {
        $targetDir = "../assets/image/ekstrakurikuler/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $foto = time() . '_' . basename($_FILES['foto']['name']);
        move_uploaded_file($_FILES['foto']['tmp_name'], $targetDir . $foto);
    }

    mysqli_query($conn, "UPDATE ekstrakurikuler SET 
                         nama='$nama', pembina='$pembina', jadwal='$jadwal',
                         deskripsi='$deskripsi', foto='$foto' WHERE id=$id");

    header("Location: ekstrakurikuler.php?msg=updated");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Ekstrakurikuler</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-success text-white">Edit Ekstrakurikuler</div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?= htmlspecialchars($data['nama']) ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Pembina</label>
                    <input type="text" name="pembina" class="form-control" value="<?= htmlspecialchars($data['pembina']) ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jadwal</label>
                    <input type="text" name="jadwal" class="form-control" value="<?= htmlspecialchars($data['jadwal']) ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="4" required><?= htmlspecialchars($data['deskripsi']) ?></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input type="file" name="foto" class="form-control">
                    <small class="text-muted">Foto saat ini:</small><br>
                    <img src="../../public/assets/image/ekstrakurikuler/<?= htmlspecialchars($data['foto']) ?>" width="200" class="mt-2">
                </div>
                <button type="submit" class="btn btn-success">Update</button>
                <a href="../../public/dashboard/ekstrakurikuler.php" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>

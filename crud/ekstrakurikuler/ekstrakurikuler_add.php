<?php
include '../../config/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $pembina = $_POST['pembina'];
    $jadwal = $_POST['jadwal'];
    $deskripsi = $_POST['deskripsi'];

    $foto = 'default.png';
    if (!empty($_FILES['foto']['name'])) {
        $targetDir = __DIR__ . "/../../public/assets/image/ekstrakurikuler/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $foto = time() . '_' . basename($_FILES['foto']['name']);
        move_uploaded_file($_FILES['foto']['tmp_name'], $targetDir . $foto);
    }

    mysqli_query($conn, "INSERT INTO ekstrakurikuler (nama, pembina, jadwal, deskripsi, foto)
                         VALUES ('$nama','$pembina','$jadwal','$deskripsi','$foto')");

    header("Location: ../../public/dashboard/ekstrakurikuler.php?msg=added");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Ekstrakurikuler</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-success text-white">Tambah Ekstrakurikuler</div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Pembina</label>
                    <input type="text" name="pembina" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jadwal</label>
                    <input type="text" name="jadwal" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="4" required></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input type="file" name="foto" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="../../public/dashboard/ekstrakurikuler.php" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>

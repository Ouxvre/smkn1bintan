<?php
include '../../config/config.php'; // koneksi ke database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nama    = $_POST['nama'];
  $jabatan = $_POST['jabatan'];
  $role    = $_POST['role'];
  $foto    = null;

  // Folder tempat simpan foto
  $target_dir = "../../public/assets/image/staff/";

  if (!empty($_FILES["foto"]["name"])) {
    // bikin nama file unik biar gak ketimpa
    $foto = time() . "_" . basename($_FILES["foto"]["name"]);
    $target_file = $target_dir . $foto;

    // cek dan upload
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
      // sukses upload
    } else {
      echo "<script>alert('Upload foto gagal!'); window.history.back();</script>";
      exit;
    }
  }

  // Simpan ke database
  $query = "INSERT INTO staff (nama, jabatan, role, foto) VALUES ('$nama', '$jabatan', '$role', '$foto')";
  if (mysqli_query($conn, $query)) {
    echo "<script>alert('Staff berhasil ditambahkan!'); window.location='../../public/dashboard/staff.php';</script>";
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Staff</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container py-5">

  <h3 class="mb-4">Tambah Staff</h3>

<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="jabatan" class="form-label">Jabatan</label>
        <input type="text" name="jabatan" class="form-control" placeholder="contoh: Guru Matematika" required>
    </div>

    <div class="mb-3">
        <label for="role" class="form-label">Role</label>
        <select name="role" class="form-control" required>
            <option value="kepala_sekolah">Kepala Sekolah</option>
            <option value="wakil_kepala">Wakil Kepala Sekolah</option>
            <option value="kepala_program">Kepala Program</option>
            <option value="guru">Guru</option>
            <option value="tenaga_kependidikan">Tenaga Kependidikan</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
        <input type="file" name="foto" class="form-control">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
</form>


</body>

</html>
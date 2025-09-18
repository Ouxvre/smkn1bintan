<?php
include 'include/check_login.php';

if (!isset($_SESSION['username'])) {
header("Location: /smkn1bintan/auth/login.php");
exit;

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="assets/css/dashboard.css" rel="stylesheet">
</head>

<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h4 class="text-center mb-4">Admin Panel</h4>
    <a href="#"><i class="fa fa-home"></i> Dashboard</a>
    <a href="../public/dashboard/users.php"><i class="fa fa-users"></i> Users</a>
    <a href="../public/dashboard/berita.php"><i class="fa fa-newspaper"></i> Berita</a>
    <a href="#"><i class="fa fa-bullhorn"></i> Pengumuman</a>
    <a href="#"><i class="fa fa-calendar"></i> Agenda</a>
    <a href="#"><i class="fa fa-cogs"></i> Settings</a>
    <a href="/smkn1bintan/auth/logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
  </div>

  <!-- Content -->
  <div class="content">
    <!-- Top Navbar -->
    <nav class="navbar navbar-light bg-white mb-4 shadow-sm">
      <span class="navbar-brand mb-0 h4">Dashboard</span>
      <div class="d-flex align-items-center">
        <span class="me-3">Hi, <?= htmlspecialchars($_SESSION['username']); ?></span>
        <img src="<?= htmlspecialchars($_SESSION['profile_pic']); ?>" alt="Profile" width="35"
          class="rounded-circle border" style="object-fit: cover; height: 35px;">

      </div>
    </nav>

    <!-- Statistik Cards -->
    <div class="row g-4 mb-4">
      <div class="col-md-3">
        <div class="card p-3 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <div>
              <h5>Siswa</h5>
              <h2>1,250</h2>
            </div>
            <i class="fa fa-user-graduate"></i>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card p-3 bg-success text-white">
          <div class="d-flex justify-content-between">
            <div>
              <h5>Guru</h5>
              <h2>85</h2>
            </div>
            <i class="fa fa-chalkboard-teacher"></i>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card p-3 bg-warning text-white">
          <div class="d-flex justify-content-between">
            <div>
              <h5>Berita</h5>
              <h2>45</h2>
            </div>
            <i class="fa fa-newspaper"></i>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card p-3 bg-danger text-white">
          <div class="d-flex justify-content-between">
            <div>
              <h5>Pengumuman</h5>
              <h2>12</h2>
            </div>
            <i class="fa fa-bullhorn"></i>
          </div>
        </div>
      </div>
    </div>

    <!-- Recent Activity -->
    <div class="card mb-4">
      <div class="card-header bg-white">
        <h5 class="mb-0">Aktivitas Terbaru</h5>
      </div>
      <div class="card-body">
        <ul class="list-group">
          <li class="list-group-item">Admin menambahkan berita baru</li>
          <li class="list-group-item">Guru Budi memperbarui data agenda</li>
          <li class="list-group-item">Pengumuman ujian semester diposting</li>
          <li class="list-group-item">Foto kegiatan pramuka ditambahkan</li>
        </ul>
      </div>
    </div>

    <!-- Shortcut -->
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card text-center p-4">
          <i class="fa fa-plus-circle fa-2x mb-3 text-primary"></i>
          <h6>Tambah Berita</h6>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-center p-4">
          <i class="fa fa-calendar-plus fa-2x mb-3 text-success"></i>
          <h6>Tambah Agenda</h6>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-center p-4">
          <i class="fa fa-file-upload fa-2x mb-3 text-warning"></i>
          <h6>Upload Dokumen</h6>
        </div>
      </div>
    </div>

  </div>

</body>

</html>
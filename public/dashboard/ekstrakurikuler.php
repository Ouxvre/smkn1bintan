<?php
include '../../config/config.php';

if (isset($_GET['delete'])) {
    $id = (int) $_GET['delete'];

    $result = mysqli_query($conn, "SELECT foto FROM ekstrakurikuler WHERE id=$id");
    $data   = mysqli_fetch_assoc($result);

    if ($data && $data['foto'] && $data['foto'] !== 'default.png') {
        $filePath = __DIR__ . "/../assets/image/ekstrakurikuler/" . $data['foto'];
        if (file_exists($filePath)) {
            unlink($filePath);
        }
    }

    // Hapus data dari database
    mysqli_query($conn, "DELETE FROM ekstrakurikuler WHERE id=$id");

    header("Location: ekstrakurikuler.php?msg=deleted");
    exit;
}


$result = mysqli_query($conn, "SELECT * FROM ekstrakurikuler ORDER BY created_at DESC");
?>

<head>
  <meta charset="UTF-8">
  <title>Dashboard - Ekstrakurikuler</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      font-family: "Segoe UI", sans-serif;
      background: #f8f9fa;
    }

    .sidebar {
      height: 100vh;
      background: #2d3b61;
      color: #fff;
      padding: 20px 0;
      position: fixed;
      width: 240px;
      top: 0;
      left: 0;
    }

    .sidebar h4 {
      font-weight: bold;
      margin-bottom: 25px;
      text-align: center;
    }

    .sidebar a {
      color: #fff;
      display: block;
      padding: 12px 20px;
      text-decoration: none;
      border-radius: 6px;
      margin: 5px 10px;
      transition: all 0.3s ease;
    }

    .sidebar a:hover,
    .sidebar a.active {
      background: #007bff;
    }

    .content {
      margin-left: 250px;
      padding: 30px;
    }

    .content h2 {
      font-size: 24px;
      font-weight: 700;
      color: #2d3b61;
    }

    table img {
      border-radius: 6px;
      object-fit: cover;
    }

    .btn-action {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-weight: 600;
    }
  </style>
</head>

<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <h4>Admin Panel</h4>
    <a href="../dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
    <a href="../dashboard/users.php"><i class="fa fa-users"></i> Users</a>
    <a href="../dashboard/berita.php"><i class="fa fa-newspaper"></i> Berita</a>
    <a href="../dashboard/gallery.php"><i class="fa fa-images"></i> Gallery</a>
    <a href="../dashboard/ekstrakurikuler.php" class="active"><i class="fa fa-school"></i> Ekstrakurikuler</a>
    <a href="../dashboard/staff.php"><i class="fa fa-user-tie"></i> Staff</a>
    <a href="#"><i class="fa fa-cogs"></i> Settings</a>
    <a href="/smkn1bintan/auth/logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
  </div>

  <!-- Content -->
  <div class="content">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2>Manajemen Ekstrakurikuler</h2>
      <a href="../../crud/ekstrakurikuler/ekstrakurikuler_add.php" class="btn btn-success">
        <i class="fa fa-plus me-2"></i> Add
      </a>
    </div>

    <div class="card shadow-sm">
      <div class="card-body">
        <table class="table table-hover table-bordered align-middle">
          <thead class="table-dark text-center">
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Pembina</th>
              <th>Jadwal</th>
              <th>Deskripsi</th>
              <th>Foto</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
              <td class="text-center"><?= $no++ ?></td>
              <td><?= htmlspecialchars($row['nama']) ?></td>
              <td><?= htmlspecialchars($row['pembina']) ?></td>
              <td><?= htmlspecialchars($row['jadwal']) ?></td>
              <td><?= htmlspecialchars($row['deskripsi']) ?></td>
              <td class="text-center">
                <img src="../assets/image/ekstrakurikuler/<?= htmlspecialchars($row['foto']) ?>" 
                     width="50" height="50">
              </td>
              <td class="text-center">
                <a href="../../crud/ekstrakurikuler/ekstrakurikuler_edit.php?id=<?= $row['id'] ?>"
                   class="btn btn-warning btn-sm btn-action">
                   <i class="fa fa-edit"></i> Edit
                </a>
                <a href="ekstrakurikuler.php?delete=<?= $row['id'] ?>"
                   onclick="return confirm('Yakin hapus?')"
                   class="btn btn-danger btn-sm btn-action">
                   <i class="fa fa-trash"></i> Delete
                </a>
              </td>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

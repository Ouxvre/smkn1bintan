<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scroll Effect Fixed Background</title>
  <style>
    body,
    html {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    /* Bagian hero dengan gambar fixed */
    .hero {
      height: 100vh;
      background: url('assets/image/frontschool.jpg') center/cover no-repeat;
      background-attachment: fixed;
      /* gambar diam */
      position: relative;
    }

    /* Overlay gradasi putih di bawah */
    .hero::after {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 60%;
      /* full tinggi hero */
      background: linear-gradient(to top,
          rgba(255, 255, 255, 1) 0%,
          /* putih solid di bawah */
          rgba(255, 255, 255, 0.9) 20%,
          /* agak transparan */
          rgba(255, 255, 255, 0.5) 40%,
          /* makin tipis */
          rgba(255, 255, 255, 0.0) 70%
          /* transparan penuh di atas */
        );
    }


    /* Konten di bawah */
    .content {
      background: white;
      padding: 50px;
    }

        section.profile {
      max-width: 1000px;
      margin: 0 auto;
      padding: 60px 20px;
      text-align: center;
    }

    section.profile h2 {
      font-size: 32px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    section.profile h2::after {
      content: "";
      display: block;
      width: 60px;
      height: 3px;
      background: #00804b; /* warna hijau */
      margin: 10px auto 30px auto;
      border-radius: 5px;
    }

    .card {
      background: #fff;
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
      text-align: left;
    }

    .card h3 {
      color: #00804b;
      margin-bottom: 15px;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 15px;
      margin-top: 20px;
    }

    .grid-item {
      background: #f9fafb;
      border-radius: 8px;
      padding: 15px 20px;
      display: flex;
      align-items: flex-start;
      gap: 10px;
    }

    .grid-item i {
      color: #00804b;
      font-size: 18px;
      margin-top: 3px;
    }
  </style>
</head>

<body>
  <?php include 'include/navbar.php' ?>

  <section class="hero">
    <h1 style="color:white; text-align:center; padding-top:200px;">
      Profile SMK Jakarta Timur 1
    </h1>
    <p style="color:white; text-align:center;">
      Membangun Generasi Unggul dengan Pendidikan Berkualitas
    </p>
  </section>

  <section class="profile">
    <h2>Profile Sekolah</h2>
    <div class="card">
      <h3>SMK Jakarta Timur 1</h3>
      <p>
        SMK Jakarta Timur 1 adalah sekolah menengah kejuruan yang mengusung konsep
        Berbasis Produksi dan Jasa (Teaching Factory). Sekolah ini menyediakan berbagai
        program keahlian yang dirancang untuk mempersiapkan siswa menjadi profesional
        yang kompeten dan siap menghadapi dunia kerja atau industri.
      </p>

      <div class="grid">
        <div class="grid-item">
          <i class="fa-solid fa-graduation-cap"></i>
          <span>Program keahlian di bidang akuntansi, manajemen perkantoran, pemasaran, TKJ, dan DKV.</span>
        </div>
        <div class="grid-item">
          <i class="fa-solid fa-briefcase"></i>
          <span>Program magang kerja ke luar negeri (Jepang & Jerman).</span>
        </div>
        <div class="grid-item">
          <i class="fa-solid fa-chalkboard-teacher"></i>
          <span>Tenaga pengajar berpengalaman dan tersertifikasi.</span>
        </div>
        <div class="grid-item">
          <i class="fa-solid fa-laptop-code"></i>
          <span>Metode pembelajaran praktis dan terintegrasi dengan dunia industri.</span>
        </div>
        <div class="grid-item">
          <i class="fa-solid fa-building"></i>
          <span>Fasilitas lengkap: lab kejuruan, business center, studio fotografi, dan percetakan.</span>
        </div>
        <div class="grid-item">
          <i class="fa-solid fa-location-dot"></i>
          <span>Lokasi strategis di Jakarta Timur dengan lingkungan yang aman.</span>
        </div>
      </div>
    </div>
  </section>


</body>

</html>
<style>
  /* Reset bawaan browser */
  @import url("https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap");

  html,
  body {
    margin: 0;
    padding: 0;
    font-family: "Outfit", sans-serif;
    scrollbar-width: none;
  }

  /* Navbar */
  .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #24334a;
    padding: 20px 70px;
    color: white;
    flex-wrap: wrap;
    width: 100%;
    box-sizing: border-box;

    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000;
  }

  .brand {
    display: flex;
    align-items: center;
  }

  .brand img {
    height: 40px;
    margin-right: 30px;
  }

  .brand-text {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .brand-text .title {
    font-size: 1rem;
    font-weight: 700;
    text-transform: uppercase;
  }

  .brand-text .subtitle {
    font-size: 0.9rem;
    font-weight: 200;
    margin-left: 12px;
  }

  .nav-links {
    display: flex;
    gap: 29px;
  }

  .nav-links a {
    color: white;
    text-decoration: none;
    font-weight: 500;
    font-size: 14px;
    transition: color 0.3s;
  }

  /* Samain semua link navbar biar konsisten */
  .nav-links a,
  .dropdown>a {
    color: white;
    text-decoration: none;
    font-weight: 500;
    font-size: 14px;
    /* samain ukuran */
    transition: color 0.3s;
  }


  .nav-links a:hover {
    color: #ffcc00;
  }

  @media (max-width: 768px) {
    .navbar {
      flex-direction: column;
      align-items: flex-start;
    }

    .nav-links {
      margin-top: 10px;
      flex-direction: column;
      gap: 10px;
    }
  }

  /* dropdown */

  /* Dropdown */
  .dropdown {
    position: relative;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #24334a;
    top: 100%;
    left: 0;
    min-width: 180px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
    border-radius: 6px;
    z-index: 999;
    flex-direction: column;
    
  }

  .dropdown-content a {
    padding: 10px 15px;
    display: block;
    color: white;
    font-size: 14px;
  }

  .dropdown>a {
    display: flex;
    align-items: center;
    gap: 5px;
    /* kasih jarak kecil antara teks dan panah */
  }


  .dropdown-content a:hover {
    background-color: #1a2535;
    color: #ffcc00;
  }

  /* Hover effect untuk munculin dropdown */
  .dropdown:hover .dropdown-content {
    display: flex;
  }

  @media (max-width: 768px) {
    .navbar {
      flex-direction: column;
      align-items: flex-start;
    }

    .nav-links {
      margin-top: 10px;
      flex-direction: column;
      gap: 10px;
    }

    .dropdown-content {
      position: static;
      /* biar ikut alur di mobile */
      box-shadow: none;
    }
  }
</style>

<div class="navbar">
  <div class="brand">
    <img src="assets/image/logo_smk.png" alt="Logo SMK" />
    <div class="brand-text">
      <div class="title">SMK NEGERI 1</div>
      <div class="subtitle">Bintan Utara</div>
    </div>
  </div>
  <div class="nav-links">
    <a href="index.php">BERANDA</a>

    <div class="dropdown">
      <a href="#">TENTANG ▾</a>
      <div class="dropdown-content">
        <a href="profil.php">Profile Sekolah</a>
        <a href="#">Galeri</a>
        <a href="#">Ekstrakulikuler</a>
        <a href="gurudantendik.php">Guru Dan Tendik</a>
      </div>
    </div>

    <div class="dropdown">
      <a href="../jurusan/jurusan.php">JURUSAN ▾</a>
      <div class="dropdown-content">
        <a href="#">Rekayasa Perangkat Lunak</a>
        <a href="#">Perhotelan</a>
        <a href="#">Teknik Jaringan Komputer</a>
        <a href="#">Teknik Elektronika Industri</a>
        <a href="#">Teknik Instalasi Tenaga Listrik</a>
        <a href="#">Teknik Kendaraan Ringan</a>
        <a href="#">Teknik Pengelasan</a>
        <a href="#">Teknik Konstruksi Dan Pembangunan</a>
      </div>
    </div>

    <div class="dropdown">
      <a href="#">INFORMASI ▾</a>
      <div class="dropdown-content">
        <a href="#">Agenda</a>
        <a href="#">Pengumuman</a>
        <a href="#">Kegiatan</a>
      </div>
    </div>

    <a href="#berita">BERITA</a>
    <a href="#">PPDBB</a>
  </div>
</div>

<script>
  window.addEventListener("scroll", function() {
    const navbar = document.querySelector(".navbar");
    navbar.classList.toggle("scrolled", window.scrollY > 50);
  });
</script>
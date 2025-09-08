<style>
/* Reset bawaan browser */
@import url("https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap");

html, body {
  margin: 0;
  padding: 0;
  font-family: "Outfit", sans-serif;
}

/* Navbar */
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #2c3e50;
  padding: 10px 70px;
  color: white;
  flex-wrap: wrap;
  width: 100%; /* pastikan full */
  box-sizing: border-box;
}

.brand {
  display: flex;
  align-items: center;
}

.brand img {
  height: 55px;
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
  gap: 24px;
}

.nav-links a {
  color: white;
  text-decoration: none;
  font-weight: 500;
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
</style>

<div class="navbar">
  <div class="brand">
    <img src="assets/image/logo_smk.png" alt="Logo SMK" />
    <div class="brand-text" data-aos="zoom-in">
      <div class="title">SMK NEGERI 1</div>
      <div class="subtitle">Bintan Utara</div>
    </div>
  </div>
  <div class="nav-links">
    <a href="#">HOME</a>
    <a href="#">PROFIL</a>
    <a href="#">JURUSAN</a>
    <a href="#">INFORMASI</a>
    <a href="#">BERITA</a>
    <a href="#">PPDBB</a>
  </div>
</div>

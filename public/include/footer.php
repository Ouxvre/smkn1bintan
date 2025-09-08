<style>
/* Reset */
html, body {
  margin: 0;
  padding: 0;
  font-family: "Outfit", sans-serif;
}

/* Footer */
.footer {
  background-color: #2c3e50; /* warna biru tua */
  color: white;
  padding: 25px 40px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
}

.footer-left {
  display: flex;
  align-items: center;
  gap: 50px;
}

.footer-left img {
  height: 110px;
}

.footer-text {
  display: flex;
  flex-direction: column;
}

.footer-text .school-name {
  font-weight: bold;
  font-size: 1.3rem;
  line-height : 1.9;
}

.footer-text .school-subtitle {
  font-weight: 300;
  font-size: 0.9rem;
}

.footer-address {
  border-left: 1px solid white;
  padding-left: 20px;
  font-size: 0.90rem;
  line-height: 1.8;
}

.footer-right {
  display: flex;
  gap: 15px;
}

.footer-right a img {
  height: 32px;
  width: 32px;
  transition: transform 0.3s;
}

.footer-right a img:hover {
  transform: scale(1.1);
}

@media (max-width: 768px) {
  .footer {
    flex-direction: column;
    align-items: flex-start;
    gap: 20px;
  }

  .footer-left {
    flex-direction: column;
    align-items: flex-start;
  }

  .footer-address {
    border-left: none;
    padding-left: 0;
  }
}
</style>

<div class="footer">
  <div class="footer-left">
    <img src="assets/image/logo_smk.png" alt="Logo SMK">
    <div class="footer-text">
      <div class="school-name">SMK NEGERI 1</div>
      <div class="school-subtitle">Bintan Utara</div>
    </div>
    <div class="footer-address">
      Jl. Pasar Baru No.1, Tanjung Uban Utara <br>
      Kecamatan Bintan Utara, Kabupaten Bintan <br>
      Provinsi Kepulauan Riau, Kode Pos: 29152
    </div>
  </div>

  <div class="footer-right">
    <a href="#"><img src="assets/image/youtube_logo.png" alt="YouTube"></a>
    <a href="#"><img src="assets/image/facebook_logo.jpeg" alt="Facebook"></a>
    <a href="#"><img src="assets/image/ig_logo.png" alt="Instagram"></a>
  </div>
</div>

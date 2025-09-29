<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil SMK NEGERI 1 BINTAN UTARA</title>
    <link rel="stylesheet" href="assets/css/profil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f8f9fa;
            color: #2c3e50;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 80px 20px;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
            animation: fadeInDown 0.6s ease;
        }

        .section-header h2 {
            font-size: 42px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-header h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 2px;
        }

        .section-header p {
            color: #7f8c8d;
            font-size: 16px;
            margin-top: 20px;
        }

        /* About Section */
        .about-section {
            background: white;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            animation: fadeInUp 0.8s ease;
        }

        .about-text h3 {
            font-size: 32px;
            font-weight: 700;
            color: #667eea;
            margin-bottom: 25px;
        }

        .about-text p {
            font-size: 16px;
            line-height: 1.8;
            color: #555;
            margin-bottom: 20px;
            text-align: justify;
        }

        .about-image {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0,0,0,0.15);
            animation: float 3s ease-in-out infinite;
        }

        .about-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.5s ease;
        }

        .about-image:hover img {
            transform: scale(1.1);
        }

        /* Vision Mission Section */
        .vm-section {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        .vm-intro {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
            margin-bottom: 50px;
            animation: fadeIn 0.8s ease;
        }

        .vm-intro p {
            font-size: 16px;
            line-height: 1.8;
            color: #555;
            text-align: center;
        }

        .vm-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-top: 50px;
        }

        .vm-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .vm-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #667eea, #764ba2);
        }

        .vm-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(0,0,0,0.15);
        }

        .vm-card h3 {
            font-size: 28px;
            font-weight: 700;
            color: #667eea;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .vm-card h3 i {
            font-size: 32px;
        }

        .vm-card p {
            font-size: 16px;
            line-height: 1.8;
            color: #555;
        }

        .vm-card ol {
            padding-left: 20px;
        }

        .vm-card ol li {
            font-size: 15px;
            line-height: 1.8;
            color: #555;
            margin-bottom: 15px;
            padding-left: 10px;
        }

        .vm-card ol li::marker {
            color: #667eea;
            font-weight: 700;
        }

        .mission-card {
            grid-column: 1 / -1;
        }

        /* Identity Section */
        .identity-section {
            background: white;
        }

        .identity-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
            animation: fadeInUp 0.8s ease;
        }

        .identity-list {
            display: grid;
            gap: 15px;
        }

        .identity-item {
            background: #f8f9fa;
            padding: 20px 25px;
            border-radius: 12px;
            border-left: 4px solid #667eea;
            transition: all 0.3s ease;
        }

        .identity-item:hover {
            background: white;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transform: translateX(5px);
        }

        .identity-item b {
            color: #667eea;
            font-weight: 600;
            font-size: 14px;
            display: block;
            margin-bottom: 5px;
        }

        .identity-item p {
            color: #555;
            font-size: 15px;
            margin: 0;
        }

        .identity-image {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0,0,0,0.15);
            height: 500px;
        }

        .identity-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .identity-image:hover img {
            transform: scale(1.05);
        }

        /* Contact Section */
        .contact-section {
            background: #24334a;
            color: white;
        }

        .contact-section .section-header h2,
        .contact-section .section-header h2::after {
            color: white;
        }

        .contact-section .section-header p {
            color: rgba(255,255,255,0.9);
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-bottom: 50px;
        }

        .contact-card {
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            padding: 35px 30px;
            border-radius: 20px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid rgba(255,255,255,0.2);
        }

        .contact-card:hover {
            background: rgba(255,255,255,0.25);
            transform: translateY(-10px);
        }

        .contact-card i {
            font-size: 48px;
            margin-bottom: 20px;
            display: block;
        }

        .contact-card h4 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .contact-card p {
            font-size: 15px;
            opacity: 0.95;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .social-btn {
            width: 60px;
            height: 60px;
            background: rgba(255,255,255,0.2);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.3);
        }

        .social-btn:hover {
            background: white;
            color: #667eea;
            transform: translateY(-5px);
        }

        /* Map Section */
        .map-section {
            background: white;
        }

        .map-container {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0,0,0,0.15);
            height: 500px;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .about-content,
            .identity-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .vm-grid {
                grid-template-columns: 1fr;
            }

            .contact-grid {
                grid-template-columns: 1fr;
            }

            .hero-content h1 {
                font-size: 36px;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 60px 20px;
            }

            .hero-section {
                padding: 80px 20px 60px;
            }

            .hero-content h1 {
                font-size: 32px;
            }

            .section-header h2 {
                font-size: 32px;
            }

            .about-text h3 {
                font-size: 26px;
            }

            .vm-card {
                padding: 30px;
            }

            .identity-image {
                height: 350px;
            }

            .about-content {
                grid-template-columns: 1fr;
            }

            .about-image {
                order: -1;
            }
        }

        @media (max-width: 480px) {
            .hero-content h1 {
                font-size: 28px;
            }

            .section-header h2 {
                font-size: 28px;
            }

            .vm-card {
                padding: 25px;
            }

            .vm-card h3 {
                font-size: 22px;
            }

            .contact-card {
                padding: 25px 20px;
            }
        }
    </style>
</head>

<body>
    <?php include 'include/navbar.php' ?>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="section-header">
                <h2>Tentang Kami</h2>
                <p>Sejarah, visi, dan perjalanan sekolah kami</p>
            </div>

            <div class="about-content">
                <div class="about-text">
                    <h3>SMK Negeri 1 Bintan Utara</h3>
                    <p>
                        SMKN 1 Bintan Utara adalah sekolah kejuruan unggulan di Kabupaten Bintan yang berdiri sejak 7 April 2006. Sekolah ini memiliki visi mencetak insan terampil, kompetitif, berjiwa wirausaha, serta berwawasan nasional dan global berlandaskan iman takwa.
                    </p>
                    <p>
                        Berlokasi strategis di perbatasan Indonesia dengan Singapura dan Malaysia, sekolah ini berkembang menjadi pusat pendidikan teknologi dan informasi. Jurusan pertama yang dibuka adalah Teknik Komputer dan Jaringan (TKJ) serta Teknik Elektronika Industri (TEI), yang kini telah berkembang menjadi 8 jurusan sesuai minat siswa.
                    </p>
                    <p>
                        SMKN 1 Bintan Utara berkomitmen pada mutu pembelajaran, pengembangan karakter, serta kewirausahaan. Siswa tidak hanya disiapkan untuk dunia kerja, tetapi juga didorong menciptakan peluang usaha. Dengan dukungan fasilitas, program unggulan, serta semangat nasionalisme dan globalisasi, sekolah ini konsisten melahirkan lulusan yang terampil, berkarakter, dan siap menghadapi era digital serta industri modern.
                    </p>
                </div>
                <div class="about-image">
                    <img src="assets/image/logo_smk.png" alt="SMK Negeri 1 Bintan Utara">
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section class="vm-section">
        <div class="container">
            <div class="section-header">
                <h2>Visi & Misi</h2>
                <p>Komitmen kami untuk masa depan pendidikan</p>
            </div>

            <div class="vm-intro">
                <p>
                    Visi dan misi SMKN 1 Bintan Utara dirumuskan sebagai komitmen untuk mencetak generasi terampil, kompetitif, berjiwa wirausaha, serta siap bersaing di tingkat nasional maupun global. Rumusan ini menjadi arah dalam setiap langkah pendidikan, mulai dari pembelajaran, kurikulum, hingga pembinaan karakter. Dengan visi misi tersebut, seluruh warga sekolah diajak memiliki tujuan yang sama: membangun sekolah berwawasan mutu dan keunggulan. Dengan kerja sama, kebersamaan, serta landasan iman dan taqwa, SMKN 1 Bintan Utara bertekad melahirkan lulusan berprestasi dan mampu memberi kontribusi nyata bagi masyarakat, bangsa, dan negara.
                </p>
            </div>

            <div class="vm-grid">
                <div class="vm-card">
                    <h3><i class="fas fa-eye"></i> Visi</h3>
                    <p>
                        Terwujudnya Insan Terampil, Kompetitif, Berjiwa Wirausaha, Berwawasan Nasionalisme dan Global Dilandasi Iman Taqwa.
                    </p>
                </div>

                <div class="vm-card mission-card">
                    <h3><i class="fas fa-bullseye"></i> Misi</h3>
                    <ol>
                        <li>Melaksanakan Proses Belajar dan Mengajar Secara Efektif dan Efisien Sesuai Kebutuhan Dunia Kerja.</li>
                        <li>Menciptakan Lingkungan dan Suasana Belajar dan Mengajar yang Kondusif, Nyaman dan Aman.</li>
                        <li>Melengkapi Peralatan Pembelajaran Modern yang Dapat Menunjang Prestasi.</li>
                        <li>Menciptakan Komunikasi yang Baik antar Warga Sekolah (Guru, Tenaga Kependidikan, Peserta Didik, Orangtua Siswa dan Masyarakat yang Tergabung dalam Komite Sekolah).</li>
                        <li>Menuju Pelayanan Prima dan KBM dengan E-Learning.</li>
                        <li>Melaksanakan Aktifitas Kegiatan Keagamaan Sesuai Dengan Agama Masing-Masing.</li>
                        <li>Melaksanakan Pembinaan dan Pemberian Reward (Penghargaan) Kepada Semua Komponen baik Siswa, Guru dan Karyawan Sekolah yang Mempunyai Prestasi yang Baik dan Punishment bagi yang Melanggar Aturan.</li>
                        <li>Urutan Mutu 5 Besar SMK Se-Provinsi Kepulauan Riau.</li>
                        <li>Mengembangkan Budaya Sekolah yang Kondusif Untuk Mencapai Tujuan Pendidikan Nasional.</li>
                        <li>Mengembangkan Berbagai Kegiatan Dalam Proses Belajar di Kelas Berbasis Pendidikan Budaya dan Karakter Bangsa.</li>
                        <li>Peningkatan Disiplin dan Etos Kerja dan Budaya Industri.</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Identity Section -->
    <section class="identity-section">
        <div class="container">
            <div class="section-header">
                <h2>Identitas Sekolah</h2>
                <p>Informasi lengkap tentang sekolah kami</p>
            </div>

            <div class="identity-grid">
                <div class="identity-list">
                    <div class="identity-item">
                        <b>Akreditasi</b>
                        <p>A</p>
                    </div>
                    <div class="identity-item">
                        <b>Kurikulum</b>
                        <p>Kurikulum Merdeka</p>
                    </div>
                    <div class="identity-item">
                        <b>Status</b>
                        <p>Negeri</p>
                    </div>
                    <div class="identity-item">
                        <b>Bentuk Pendidikan</b>
                        <p>Sekolah Menengah Kejuruan</p>
                    </div>
                    <div class="identity-item">
                        <b>Status Kepemilikan</b>
                        <p>Pemerintah Daerah</p>
                    </div>
                    <div class="identity-item">
                        <b>Alamat Lengkap</b>
                        <p>Jl. Pasar Baru No.1, Tanjung Uban Utara, Kec. Bintan Utara, Kab. Bintan, Prov. Kepulauan Riau</p>
                    </div>
                </div>

                <div class="identity-image">
                    <img src="foto-sekolah.jpg" alt="Foto Lapangan Sekolah" onerror="this.src='assets/image/logo_smk.png'">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="section-header">
                <h2>Hubungi Kami</h2>
                <p>Kami siap melayani Anda</p>
            </div>

            <div class="contact-grid">
                <div class="contact-card">
                    <i class="fas fa-phone-alt"></i>
                    <h4>Telepon & Fax</h4>
                    <p>(0771) 4651105</p>
                </div>

                <div class="contact-card">
                    <i class="fas fa-envelope"></i>
                    <h4>Email</h4>
                    <p>info@smkn1bintan.sch.id</p>
                </div>

                <div class="contact-card">
                    <i class="fas fa-map-marker-alt"></i>
                    <h4>Kode Pos</h4>
                    <p>29152</p>
                </div>
            </div>

            <div class="social-links">
                <a href="#" class="social-btn" title="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="social-btn" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-btn" title="YouTube">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <div class="section-header">
                <h2>Lokasi & Akses</h2>
                <p>Temukan kami di peta</p>
            </div>

            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.1421853863767!2d104.22839961118738!3d1.0548334624473192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d9830529db996b%3A0x63b9a051ecd75d9!2sSMK%20Negeri%201%20Bintan%20Utara!5e0!3m2!1sen!2sid!4v1757479018720!5m2!1sen!2sid"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

    <?php include 'include/footer.php' ?>
</body>

</html>
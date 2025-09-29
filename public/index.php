<?php include("../config/config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMKN 1 BINTAN UTARA</title>
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <!-- Splash screen -->
    <div id="splash">
        <div class="splash-content">
            <h1>SMKN 1 BINTAN UTARA</h1>
        </div>
        <div class="arrow-container">
            <i class="fa-solid fa-angles-up fa-bounce arrow-icon" onclick="hideSplash()"></i>
        </div>
    </div>

    <!-- navbar -->
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
                    <a href="galeri.php">Galeri</a>
                    <a href="ekstrakurikuler.php">Ekstrakulikuler</a>
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

    <div class="welcome">
        <div class="welcome-text">
            <div class="text1" id="line1"></div>
            <div class="text2" id="line2"></div>
            <div class="text3" id="line3"></div>
        </div>
    </div>

    <section class="about1">
        <div class="about-left">
            <h2 data-aos="fade-right">SMK Negeri 1 Bintan <br />Utara</h2>
            <p data-aos="fade-right">
                Sekolah Menengah Kejuruan terdepan di Bintan yang menghasilkan lulusan
                berkompeten dan siap kerja. Bergabunglah dengan ribuan siswa yang
                telah meraih kesuksesan bersama kami.
            </p>
            <a href="profil.php" class="btn" data-aos="fade-up">Pelajari Lebih Lanjut</a>
        </div>

        <div class="divider-line"></div>

        <div class="about-right">
            <img src="assets/image/logo_smk.png" alt="Logo SMK" data-aos="fade-left" />
        </div>
    </section>

    <section class="sambutan">
        <h2 data-aos="fade-up">
            <strong>Sambutan Kepala</strong> <span>SMK Negeri 1 Bintan Utara</span>
        </h2>

        <div class="sambutan-content">
            <div class="sambutan-img" data-aos="fade-right">
                <img src="assets/image/kepsek.jpg" alt="Kepala Sekolah" />
            </div>
            <div class="sambutan-text" data-aos="fade-left">
                <h3>Broery Jandriano Pratama M.Pd</h3>
                <p>
                    <span> Bismillahirrahmanirrahim .. Assalamu’alaikum</span>
                    warahmatullahi wabarakatuh , puji syukur kami panjatkan kehadirat
                    Allah SWT. Shalawat<br />
                    dan salam semoga tercurah-limpahkan kepada Nabi yang telah<br />
                    memperjuangkan dari zaman Jahiliyah ke zaman Terang Benderang<br />
                    seperti sekarang ini, Nabi Muhammad SAW.
                </p>
            </div>
        </div>
    </section>


    <!-- 3 bagan -->

    <div class="bagan">
        <!-- Card 1 -->
        <div class="card-bagan" data-aos="fade-up">
            <i class="fas fa-user"></i>
            <h3>Guru & Staff</h3>
            <a href="gurudantendik.php" class="btn">Load More</a>
        </div>

        <div class="card-bagan" data-aos="fade-up" data-aos-delay="200">
            <i class="fas fa-users"></i>
            <h3>Organisasi & Ekstrakulikuler</h3>
            <a href="organisasi.html" class="btn">Load More</a>
        </div>

        <div class="card-bagan" data-aos="fade-up" data-aos-delay="400">
            <i class="fas fa-school"></i>
            <h3>Biodata Sekolah</h3>
            <a href="profil.php" class="btn">Load More</a>
        </div>
    </div>


    <!-- bagian mengapa -->

    <section class="fitur-section">
        <h2 data-aos="fade-up">Mengapa Memilih SMK Negeri 1 Bintan Utara?</h2>
        <p data-aos="fade-up">
            Kami berkomitmen memberikan pendidikan kejuruan terbaik dengan fasilitas
            modern dan tenaga pengajar profesional
        </p>

        <div class="fitur-container">
            <div class="fitur-box" data-aos="fade-right">
                <div class="fitur-icon"><i class="fa-solid fa-briefcase"></i></div>
                <div class="fitur-content">
                    <h3>Siap Kerja</h3>
                    <p>
                        Kurikulum yang disesuaikan dengan kebutuhan industri modern untuk
                        menghasilkan lulusan yang siap bekerja
                    </p>
                </div>
            </div>
            <div class="fitur-box" data-aos="fade-up">
                <div class="fitur-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                <div class="fitur-content">
                    <h3>Fasilitas Modern</h3>
                    <p>
                        Laboratorium dan workshop lengkap untuk mendukung pembelajaran
                        praktik optimal
                    </p>
                </div>
            </div>
            <div class="fitur-box" data-aos="fade-left">
                <div class="fitur-icon"><i class="fa-solid fa-chalkboard-teacher"></i></div>
                <div class="fitur-content">
                    <h3>Guru Berpengalaman</h3>
                    <p>
                        Tenaga pengajar profesional siap membimbing siswa menuju prestasi
                        terbaik
                    </p>
                </div>
            </div>
            <div class="fitur-box" data-aos="fade-right">
                <div class="fitur-icon"><i class="fa-solid fa-handshake"></i></div>
                <div class="fitur-content">
                    <h3>Kerjasama Industri</h3>
                    <p>Didukung berbagai perusahaan untuk magang & penempatan kerja</p>
                </div>
            </div>
            <div class="fitur-box" data-aos="fade-up">
                <div class="fitur-icon"><i class="fa-solid fa-flag"></i></div>
                <div class="fitur-content">
                    <h3>Kerjasama Nasional</h3>
                    <p>
                        Terhubung ke berbagai program nasional demi kompetisi keahlian
                    </p>
                </div>
            </div>
            <div class="fitur-box" data-aos="fade-left">
                <div class="fitur-icon"><i class="fa-solid fa-globe"></i></div>
                <div class="fitur-content">
                    <h3>Akses Digital</h3>
                    <p>
                        Pembelajaran daring lewat platform digital memudahkan proses
                        belajar
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- aktif user -->

    <section class="stats-section">
        <div class="stats-container" data-aos="fade-up">
            <div class="stat-box">
                <h2>1945+</h2>
                <p>Siswa Aktif</p>
            </div>
            <div class="stat-box">
                <h2>7+</h2>
                <p>Guru Aktif</p>
            </div>
            <div class="stat-box">
                <h2>99%</h2>
                <p>Tingkat Kelulusan</p>
            </div>
            <div class="stat-box">
                <h2>8</h2>
                <p>Program Keahlian</p>
            </div>
        </div>
    </section>

    <div class="carousel">
        <!-- list item -->
        <div class="list">
            <div class="item">
                <img src="assets/image/jurusan/lab_rpl.jpg" />
                <div class="content">
                    <!-- <div class="author">RPL</div> -->
                    <div class="title">Rekayasa Perangkat Lunak</div>
                    <!-- <div class="topic">ANIMAL</div> -->
                    <div class="des">
                        <!-- lorem 50 -->
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut
                        sequi, rem magnam nesciunt minima placeat, itaque eum neque
                        officiis unde, eaque optio ratione aliquid assumenda facere ab et
                        quasi ducimus aut doloribus non numquam. Explicabo, laboriosam
                        nisi reprehenderit tempora at laborum natus unde. Ut,
                        exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="assets/image/jurusan/lab_tkj.jpg" />
                <div class="content">
                    <!-- <div class="author">TJKT</div> -->
                    <div class="title">Teknik jaringan komputer & Telekomunikasi</div>
                    <!-- <div class="topic">ANIMAL</div> -->
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut
                        sequi, rem magnam nesciunt minima placeat, itaque eum neque
                        officiis unde, eaque optio ratione aliquid assumenda facere ab et
                        quasi ducimus aut doloribus non numquam. Explicabo, laboriosam
                        nisi reprehenderit tempora at laborum natus unde. Ut,
                        exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="assets/image/jurusan/lab_titl.jpg" />
                <div class="content">
                    <!-- <div class="author">TITL</div> -->
                    <div class="title">Teknik Instalasi Tenaga Listrik</div>
                    <!-- <div class="topic">ANIMAL</div> -->
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut
                        sequi, rem magnam nesciunt minima placeat, itaque eum neque
                        officiis unde, eaque optio ratione aliquid assumenda facere ab et
                        quasi ducimus aut doloribus non numquam. Explicabo, laboriosam
                        nisi reprehenderit tempora at laborum natus unde. Ut,
                        exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="assets/image/jurusan/lab_tei.jpg" />
                <div class="content">
                    <!-- <div class="author">TEI</div> -->
                    <div class="title">Teknik Elektronika Industri</div>
                    <!-- <div class="topic">ANIMAL</div> -->
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut
                        sequi, rem magnam nesciunt minima placeat, itaque eum neque
                        officiis unde, eaque optio ratione aliquid assumenda facere ab et
                        quasi ducimus aut doloribus non numquam. Explicabo, laboriosam
                        nisi reprehenderit tempora at laborum natus unde. Ut,
                        exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="assets/image/jurusan/lab_ph.jpg" />
                <div class="content">
                    <!-- <div class="author">PH</div> -->
                    <div class="title">Perhotelan</div>
                    <!-- <div class="topic">ANIMAL</div> -->
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut
                        sequi, rem magnam nesciunt minima placeat, itaque eum neque
                        officiis unde, eaque optio ratione aliquid assumenda facere ab et
                        quasi ducimus aut doloribus non numquam. Explicabo, laboriosam
                        nisi reprehenderit tempora at laborum natus unde. Ut,
                        exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="assets/image/jurusan/lab_tp.jpg" />
                <div class="content">
                    <!-- <div class="author">TP</div> -->
                    <div class="title">Teknik Pengelasan</div>
                    <!-- <div class="topic">ANIMAL</div> -->
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut
                        sequi, rem magnam nesciunt minima placeat, itaque eum neque
                        officiis unde, eaque optio ratione aliquid assumenda facere ab et
                        quasi ducimus aut doloribus non numquam. Explicabo, laboriosam
                        nisi reprehenderit tempora at laborum natus unde. Ut,
                        exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="assets/image/jurusan/lab_tkdp.jpg" />
                <div class="content">
                    <!-- <div class="author">TKDP</div> -->
                    <div class="title">Teknik Konstruksi Dan Pembangunan</div>
                    <!-- <div class="topic">ANIMAL</div> -->
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut
                        sequi, rem magnam nesciunt minima placeat, itaque eum neque
                        officiis unde, eaque optio ratione aliquid assumenda facere ab et
                        quasi ducimus aut doloribus non numquam. Explicabo, laboriosam
                        nisi reprehenderit tempora at laborum natus unde. Ut,
                        exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="assets/image/jurusan/lab_tkr.jpg" />
                <div class="content">
                    <!-- <div class="author">TKR</div> -->
                    <div class="title">Teknik Kendaraan Ringan</div>
                    <!-- <div class="topic">ANIMAL</div> -->
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut
                        sequi, rem magnam nesciunt minima placeat, itaque eum neque
                        officiis unde, eaque optio ratione aliquid assumenda facere ab et
                        quasi ducimus aut doloribus non numquam. Explicabo, laboriosam
                        nisi reprehenderit tempora at laborum natus unde. Ut,
                        exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- list thumnail -->
        <div class="thumbnail">
            <div class="item">
                <img src="assets/image/logo_jurusan/rpl.png" />
            </div>
            <div class="item">
                <img src="assets/image/logo_jurusan/tkj.png" />
            </div>
            <div class="item">
                <img src="assets/image/logo_jurusan/titl.png" />
            </div>
            <div class="item">
                <img src="assets/image/logo_jurusan/tei.png" />
            </div>
            <div class="item">
                <img src="assets/image/logo_jurusan/ph.png" />
            </div>
            <div class="item">
                <img src="assets/image/logo_jurusan/tp.png" />
            </div>
            <div class="item">
                <img src="assets/image/logo_jurusan/tkdp.png" />
            </div>
            <div class="item">
                <img src="assets/image/logo_jurusan/tkr.png" />
            </div>
        </div>
        <!-- next prev -->

        <div class="arrows">
            <button id="prev">
                < <button id="next">>
            </button>
            </button>
        </div>
        <!-- time running -->
        <div class="time"></div>
    </div>

    <!-- berita dan artikel -->
    <div class="berita">
        <h2 class="section-title">Artikel & Berita Terbaru</h2>

        <!-- Tabs -->
        <ul class="tabs">
            <li><button class="active" data-target="berita">Berita</button></li>
            <li><button data-target="prestasi">Prestasi</button></li>
            <li><button data-target="informasi">Informasi</button></li>
        </ul>

        <!-- Berita -->
        <div id="berita" class="tab-content">
            <div class="slider-container">
                <div class="articles-wrapper">
                    <div class="articles-container">
                        <?php
                        $result = $conn->query("SELECT * FROM berita WHERE kategori='berita' ORDER BY tanggal DESC LIMIT 12");
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "
                        <div class='article-card'>
                          <div class='thumb'>
                            <img src='assets/image/berita/{$row['gambar']}' alt='{$row['judul']}'>
                          </div>
                          <div class='content'>
                            <h5>{$row['judul']}</h5>
                            <div class='meta'>📅 {$row['tanggal']}</div>
                            <p>" . substr(strip_tags($row['isi']), 0, 80) . "...</p>
                          </div>
                        </div>";
                            }
                        } else {
                            echo "<p>Belum ada berita.</p>";
                        }
                        ?>
                    </div>
                </div>
                <button class="slider-btn prev">❮</button>
                <button class="slider-btn next">❯</button>
            </div>
        </div>

        <!-- Prestasi -->
        <div id="prestasi" class="tab-content" style="display:none;">
            <div class="slider-container">
                <div class="articles-wrapper">
                    <div class="articles-container">
                        <?php
                        $result = $conn->query("SELECT * FROM berita WHERE kategori='prestasi' ORDER BY tanggal DESC LIMIT 12");
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "
                        <div class='article-card'>
                          <div class='thumb'>
                            <img src='assets/image/berita/{$row['gambar']}' alt='{$row['judul']}'>
                          </div>
                          <div class='content'>
                            <h5>{$row['judul']}</h5>
                            <div class='meta'>📅 {$row['tanggal']}</div>
                            <p>" . substr(strip_tags($row['isi']), 0, 80) . "...</p>
                          </div>
                        </div>";
                            }
                        } else {
                            echo "<p>Belum ada prestasi.</p>";
                        }
                        ?>
                    </div>
                </div>
                <button class="slider-btn prev">❮</button>
                <button class="slider-btn next">❯</button>
            </div>
        </div>

        <!-- Informasi -->
        <div id="informasi" class="tab-content" style="display:none;">
            <div class="slider-container">
                <div class="articles-wrapper">
                    <div class="articles-container">
                        <?php
                        $result = $conn->query("SELECT * FROM berita WHERE kategori='informasi' ORDER BY tanggal DESC LIMIT 12");
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "
                        <div class='article-card'>
                          <div class='thumb'>
                            <img src='assets/image/berita/{$row['gambar']}' alt='{$row['judul']}'>
                          </div>
                          <div class='content'>
                            <h5>{$row['judul']}</h5>
                            <div class='meta'>📅 {$row['tanggal']}</div>
                            <p>" . substr(strip_tags($row['isi']), 0, 80) . "...</p>
                          </div>
                        </div>";
                            }
                        } else {
                            echo "<p>Belum ada informasi.</p>";
                        }
                        ?>
                    </div>
                </div>
                <button class="slider-btn prev">❮</button>
                <button class="slider-btn next">❯</button>
            </div>
        </div>
    </div>


    <?php include 'include/footer.php' ?>
</body>

<script src="js/script.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>
<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Jajaran Pimpinan - SMK Negeri 1 Bintan Utara</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --muted: #6b7280;
            --shadow: 0 6px 18px rgba(24, 39, 75, 0.08);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }

        body {
            font-family: Montserrat, system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial;
            background: #fff;
            color: #111827;
        }

        .wrap {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        /* Hero dengan foto */
        .hero {
            position: relative;
            height: 100vh;
            background: url('assets/image/ramean.jpg') 40% 60%/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            object-position: top;
        }

        .hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.60);
        }

        .hero-content {
            position: relative;
            text-align: center;
            color: #fff;
            z-index: 1;
        }

        .hero h1 {
            font-size: 80px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .hero h2 {
            font-size: 60px;
            font-weight: 500;
            margin-top: 6px;
        }

        .hero p {
            font-size: 20px;
            margin-top: 10px;
            opacity: .9;
        }

        /* Grid & card */
        .top-row {
            display: flex;
            justify-content: center;
            gap: 100px;
            margin: 150px 0;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 50px 150px;
            justify-items: center;
        }

        .card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 220px;
            /* lebih lebar */
            text-align: center;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .card img {
            width: 100%;
            height: 240px;
            /* tinggi seragam */
            object-fit: cover;
            display: block;
            border-bottom: 1px solid #eee;
            /* garis pemisah */
        }

        .caption {
            padding: 14px 10px 20px;
        }

        .caption .name {
            display: block;
            font-weight: 700;
            font-size: 15px;
            margin-bottom: 6px;
        }

        .caption .role {
            display: block;
            font-size: 13px;
            color: #555;
        }


        @media(max-width:768px) {
            .grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .top-row {
                flex-direction: column;
                align-items: center;
                gap: 20px;
            }
        }

        @media(max-width:480px) {
            .grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <?php include 'include/navbar.php' ?>

    <section class="hero">
        <div class="hero-content">
            <h1>JAJARAN PIMPINAN</h1>
            <h2>SMK NEGERI 1 BINTAN UTARA</h2>
            <p>Mereka Adalah Bagian Terpenting dari Kami</p>
        </div>
    </section>
    <div class="wrap" data-aos="fade-up">
        <div class="top-row">
            <div class="card"> <img src="assets/image/kepsek.jpg" alt="Wakil Kepala Sekolah">
                <div class="caption"> <span class="name">NAMA+GELAR</span> <span class="role">Wakil Kepala
                        Sekolah</span> </div>
            </div>
            <div class="card"> <img src="assets/image/default.jpeg" alt="Wakil Kepala Sekolah">
                <div class="caption"> <span class="name">NAMA+GELAR</span> <span class="role">Wakil Kepala
                        Sekolah</span> </div>
            </div>

        </div> <!-- Baris 2 & 3 (grid 3 kolom) -->
        <section class="grid">
            <div class="card"> <img src="assets/image/default.jpeg" alt="Kepala TU">
                <div class="caption"> <span class="name">NAMA+GELAR</span> <span class="role">Kepala Tata Usaha / Sarana
                        Prasarana</span> </div>
            </div>
            <div class="card"> <img src="assets/image/default.jpeg" alt="Bidang Kesiswaan">
                <div class="caption"> <span class="name">NAMA+GELAR</span> <span class="role">Wakil Kepala Sekolah
                        Bidang Kesiswaan</span> </div>
            </div>
            <div class="card"> <img src="assets/image/default.jpeg" alt="Bidang Kurikulum">
                <div class="caption"> <span class="name">NAMA+GELAR</span> <span class="role">Wakil Kepala Sekolah
                        Bidang Kurikulum</span> </div>
            </div>
            <div class="card"> <img src="assets/image/default.jpeg" alt="Kepala Sekolah">
                <div class="caption"> <span class="name">NAMA+GELAR</span> <span class="role">Kepala Sekolah</span>
                </div>
            </div>
            <div class="card"> <img src="assets/image/default.jpeg" alt="Kepala Sekolah">
                <div class="caption"> <span class="name">NAMA+GELAR</span> <span class="role">Kepala Sekolah</span>
                </div>
            </div>
            <div class="card"> <img src="assets/image/default.jpeg" alt="Kepala Sekolah">
                <div class="caption"> <span class="name">NAMA+GELAR</span> <span class="role">Kepala Sekolah</span>
                </div>
            </div>
        </section>
    </div> <?php include 'include/footer.php' ?>
</body>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init();
</script>
</html>
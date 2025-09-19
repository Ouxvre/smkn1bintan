<?php
include '../config/config.php';
include '../public/include/admin_only.php';
?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Jajaran Pimpinan - SMK Negeri 1 Bintan Utara</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap");

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }

        body {
            font-family: "Outfit", sans-serif;
            background: #fff;
            color: #111827;
        }

        /* Hero */
        .hero {
            position: relative;
            height: 100vh;
            background: url('assets/image/ramean.jpg') 40% 60%/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.6);
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

        .tabs {
            display: flex;
            gap: 25px;
            border-bottom: 1px solid #e5e5e5;
            width: 50%;
            /* biar setengah di tengah */
            margin: 100px auto 30px auto;
            /* auto = rata tengah */
            justify-content: center;
        }

        .tabs button {
            background: none;
            border: none;
            outline: none;
            padding: 12px 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            color: #333;
            transition: all 0.3s ease;
            position: relative;
            /* penting untuk ::after */
        }

        .tabs button::after {
            content: "";
            position: absolute;
            bottom: -2px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 3px;
            background: #007f4e;
            transition: width 0.3s ease;
        }

        .tabs button:hover::after {
            width: 100%;
        }

        .tabs button.active {
            color: #007f4e;
            font-weight: 600;
        }

        .tabs button.active::after {
            width: 100%;
            /* garis full kalau aktif */
        }



        /* Grid */
        .grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            justify-content: center;
            padding: 100px 300px;
        }


        /* Card */
        .card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            transition: transform 0.2s ease;
            position: relative;
            min-height: 320px;
            /* tambahin tinggi minimal */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        /* Foto */
        .card .image-wrapper {
            position: relative;
            width: 100%;
            height: 230px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8f8f8;
            overflow: hidden;
        }

        .card .image-wrapper img {
            height: 100%;
            width: auto;
            object-fit: contain;
            transition: transform 0.3s ease;
        }

        /* Overlay gradasi */
        .card .image-wrapper::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.1), transparent 40%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .card:hover .image-wrapper::after {
            opacity: 1;
        }


        /* Info */
        .card .info {
            padding: 15px;
            background: #fff;
        }

        .card h3 {
            font-size: 16px;
            font-weight: 600;
            margin: 8px 0 5px;
            color: #111;
        }

        .card p {
            font-size: 14px;
            color: #666;
            margin: 0;
        }


        .hidden {
            display: none;
        }

        @media (max-width: 1024px) {
            .grid {
                grid-template-columns: repeat(2, 1fr);
                /* tablet */
            }
        }

        @media (max-width: 600px) {
            .grid {
                grid-template-columns: 1fr;
                /* HP */
            }
        }
    </style>
</head>

<body>
    <?php include 'include/navbar.php' ?>

    <section class="hero">
        <div class="hero-content">
            <h1>Guru Dan Tenaga Kependidikan</h1>
            <h2>SMK NEGERI 1 BINTAN UTARA</h2>
            <p>Tenaga pendidik profesional yang berdedikasi untuk memberikan pendidikan<br>
                berkualitas kepada siswa-siswi kami.</p>
        </div>
    </section>

    <!-- Tabs -->
    <div class="tabs">
        <button class="active" data-filter="all" data-aos="fade-up" data-aos-duration="100">Semua</button>
        <button data-filter="kepala_sekolah" data-aos="fade-up" data-aos-duration="200">Kepala Sekolah</button>
        <button data-filter="wakil_kepala" data-aos="fade-up" data-aos-duration="400">Wakil Kepala Sekolah</button>
        <button data-filter="kepala_program" data-aos="fade-up" data-aos-duration="600">Kepala Program Keahlian</button>
        <button data-filter="guru" data-aos="fade-up" data-aos-duration="800">Guru</button>
        <button data-filter="tenaga_kependidikan" data-aos="fade-up" data-aos-duration="1000">Tenaga Kependidikan</button>
    </div>

    <!-- Grid Cards -->
    <div class="grid">
        <?php
        $result = mysqli_query($conn, "SELECT * FROM staff ORDER BY id DESC");
        while ($row = mysqli_fetch_assoc($result)):
            $foto = !empty($row['foto']) ? "assets/image/staff/" . $row['foto'] : "assets/image/default.png";

            // mapping role -> kategori filter
            $role = strtolower($row['role']);
            if ($role === "kepala_sekolah") {
                $category = "kepala_sekolah";
            } elseif ($role === "wakil_kepala") {
                $category = "wakil_kepala";
            } elseif ($role === "kepala_program") {
                $category = "kepala_program";
            } elseif ($role === "guru") {
                $category = "guru";
            } elseif ($role === "tenaga_kependidikan") {
                $category = "tenaga_kependidikan";
            } else {
                $category = "lainnya";
            }
        ?>
            <div class="card" data-category="<?= strtolower($row['role']); ?>" data-aos="fade-up"
                data-aos-duration="800"
                data-aos-delay="<?= $delay; ?>">
                <div class="image-wrapper">
                    <img src="<?= $foto; ?>" alt="Foto <?= htmlspecialchars($row['nama']); ?>">
                </div>
                <div class="info">
                    <h3><?= htmlspecialchars($row['nama']); ?></h3>
                    <p><?= htmlspecialchars($row['jabatan']); ?></p>
                </div>
            </div>
        <?php
            $delay = 100;
        endwhile; ?>
    </div>

    <?php include 'include/footer.php' ?>
</body>

<script>
    const tabs = document.querySelectorAll(".tabs button");
    const cards = document.querySelectorAll(".card");

    tabs.forEach(tab => {
        tab.addEventListener("click", () => {
            tabs.forEach(btn => btn.classList.remove("active"));
            tab.classList.add("active");

            const filter = tab.getAttribute("data-filter");

            cards.forEach(card => {
                if (filter === "all" || card.getAttribute("data-category") === filter) {
                    card.classList.remove("hidden");
                } else {
                    card.classList.add("hidden");
                }
            });
        });
    });
</script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: false,
        mirror: false
    });
</script>

</html>
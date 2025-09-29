<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teknik Elektronika Industri - SMK</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #050505;
            color: #fff;
            overflow-x: hidden;
        }

        .hero {
            position: relative;
            height: 100vh;
            background: linear-gradient(135deg, #0a4d68 0%, #088395 50%, #05bfdb 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .circuit-bg {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0.1;
            background-image: 
                repeating-linear-gradient(90deg, transparent, transparent 98px, rgba(255,255,255,0.3) 98px, rgba(255,255,255,0.3) 100px),
                repeating-linear-gradient(0deg, transparent, transparent 98px, rgba(255,255,255,0.3) 98px, rgba(255,255,255,0.3) 100px);
            animation: slideCircuit 20s linear infinite;
        }

        @keyframes slideCircuit {
            0% { transform: translate(0, 0); }
            100% { transform: translate(100px, 100px); }
        }

        .tech-orbs {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .orb {
            position: absolute;
            border-radius: 50%;
            background: radial-gradient(circle at 30% 30%, rgba(5,191,219,0.6), rgba(8,131,149,0.2));
            filter: blur(40px);
            animation: float 8s ease-in-out infinite;
        }

        .orb1 { width: 300px; height: 300px; top: 10%; left: 10%; animation-delay: 0s; }
        .orb2 { width: 200px; height: 200px; top: 60%; right: 15%; animation-delay: 2s; }
        .orb3 { width: 250px; height: 250px; bottom: 15%; left: 40%; animation-delay: 4s; }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(30px, -30px) scale(1.1); }
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 20px;
            max-width: 1100px;
        }

        .tech-badge {
            display: inline-block;
            padding: 10px 25px;
            background: rgba(255,255,255,0.15);
            border-radius: 30px;
            font-size: 0.9rem;
            margin-bottom: 25px;
            letter-spacing: 3px;
            text-transform: uppercase;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.3);
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { box-shadow: 0 0 20px rgba(5,191,219,0.5); }
            50% { box-shadow: 0 0 40px rgba(5,191,219,0.8); }
        }

        .hero h1 {
            font-size: 4.5rem;
            font-weight: 900;
            margin-bottom: 25px;
            text-shadow: 0 10px 50px rgba(0,0,0,0.5);
            animation: fadeInUp 1s ease;
            letter-spacing: 2px;
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 40px;
            opacity: 0.95;
            animation: fadeInUp 1s ease 0.2s both;
            font-weight: 300;
            letter-spacing: 1px;
            line-height: 1.6;
        }

        .cta-button {
            display: inline-block;
            padding: 20px 50px;
            background: #fff;
            color: #0a4d68;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
            transition: all 0.4s ease;
            box-shadow: 0 15px 50px rgba(5,191,219,0.4);
            animation: fadeInUp 1s ease 0.4s both;
            text-transform: uppercase;
            letter-spacing: 2px;
            position: relative;
            overflow: hidden;
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(5,191,219,0.3), transparent);
            transition: left 0.5s ease;
        }

        .cta-button:hover::before {
            left: 100%;
        }

        .cta-button:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 20px 60px rgba(5,191,219,0.6);
        }

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

        .section {
            padding: 100px 20px;
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
        }

        .section-title {
            font-size: 3rem;
            text-align: center;
            margin-bottom: 70px;
            background: linear-gradient(135deg, #088395 0%, #05bfdb 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 900;
            letter-spacing: 2px;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, transparent, #05bfdb, transparent);
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
            gap: 35px;
            margin-bottom: 60px;
        }

        .card {
            background: linear-gradient(135deg, rgba(8,131,149,0.1) 0%, rgba(5,191,219,0.05) 100%);
            border-radius: 25px;
            padding: 45px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(5,191,219,0.3);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #088395 0%, #05bfdb 100%);
            transform: scaleX(0);
            transition: transform 0.5s ease;
        }

        .card::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 0;
            height: 0;
            background: radial-gradient(circle, rgba(5,191,219,0.1), transparent);
            border-radius: 50%;
            transition: width 0.5s ease, height 0.5s ease;
        }

        .card:hover {
            transform: translateY(-15px);
            background: linear-gradient(135deg, rgba(8,131,149,0.15) 0%, rgba(5,191,219,0.1) 100%);
            box-shadow: 0 25px 70px rgba(5,191,219,0.4);
            border-color: rgba(5,191,219,0.6);
        }

        .card:hover::before {
            transform: scaleX(1);
        }

        .card:hover::after {
            width: 500px;
            height: 500px;
        }

        .card-icon {
            font-size: 3.5rem;
            margin-bottom: 25px;
            filter: drop-shadow(0 5px 15px rgba(5,191,219,0.6));
            position: relative;
            z-index: 1;
        }

        .card h3 {
            font-size: 1.7rem;
            margin-bottom: 18px;
            color: #fff;
            font-weight: 700;
            position: relative;
            z-index: 1;
        }

        .card p {
            color: rgba(255,255,255,0.85);
            line-height: 1.7;
            font-size: 1.05rem;
            position: relative;
            z-index: 1;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
            gap: 25px;
        }

        .skill-item {
            background: linear-gradient(135deg, rgba(8,131,149,0.2) 0%, rgba(5,191,219,0.1) 100%);
            padding: 30px;
            border-radius: 20px;
            text-align: center;
            transition: all 0.4s ease;
            border: 1px solid rgba(5,191,219,0.2);
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .skill-item::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: conic-gradient(transparent, rgba(5,191,219,0.3), transparent 30%);
            animation: rotate 4s linear infinite;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .skill-item:hover::before {
            opacity: 1;
        }

        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .skill-item:hover {
            transform: scale(1.08);
            background: linear-gradient(135deg, rgba(8,131,149,0.3) 0%, rgba(5,191,219,0.2) 100%);
            box-shadow: 0 15px 40px rgba(5,191,219,0.4);
            border-color: rgba(5,191,219,0.5);
        }

        .skill-icon {
            font-size: 3rem;
            margin-bottom: 12px;
            filter: drop-shadow(0 3px 8px rgba(5,191,219,0.5));
            position: relative;
            z-index: 1;
        }

        .skill-item h4 {
            font-size: 1.1rem;
            font-weight: 600;
            position: relative;
            z-index: 1;
        }

        .timeline {
            position: relative;
            padding-left: 50px;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 4px;
            background: linear-gradient(180deg, #088395 0%, #05bfdb 100%);
            border-radius: 2px;
            box-shadow: 0 0 20px rgba(5,191,219,0.5);
        }

        .timeline-item {
            margin-bottom: 50px;
            position: relative;
            padding: 30px;
            background: rgba(8,131,149,0.05);
            border-radius: 20px;
            border-left: 3px solid transparent;
            transition: all 0.4s ease;
        }

        .timeline-item:hover {
            background: rgba(8,131,149,0.12);
            border-left-color: #05bfdb;
            transform: translateX(10px);
            box-shadow: 0 10px 40px rgba(5,191,219,0.2);
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -60px;
            top: 35px;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: #05bfdb;
            border: 4px solid #050505;
            box-shadow: 0 0 20px rgba(5,191,219,0.8);
            z-index: 2;
        }

        .timeline-item h4 {
            font-size: 1.4rem;
            margin-bottom: 12px;
            color: #05bfdb;
            font-weight: 700;
        }

        .timeline-item p {
            color: rgba(255,255,255,0.85);
            line-height: 1.8;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 35px;
            text-align: center;
        }

        .stat-item {
            padding: 45px;
            background: linear-gradient(135deg, rgba(8,131,149,0.1) 0%, rgba(5,191,219,0.05) 100%);
            border-radius: 25px;
            border: 1px solid rgba(5,191,219,0.3);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at center, rgba(5,191,219,0.1), transparent);
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .stat-item:hover::before {
            opacity: 1;
        }

        .stat-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(5,191,219,0.4);
            border-color: rgba(5,191,219,0.6);
        }

        .stat-number {
            font-size: 4rem;
            font-weight: 900;
            background: linear-gradient(135deg, #088395 0%, #05bfdb 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 12px;
            position: relative;
            z-index: 1;
        }

        .stat-label {
            font-size: 1.15rem;
            color: rgba(255,255,255,0.8);
            font-weight: 500;
            position: relative;
            z-index: 1;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .gallery-item {
            height: 240px;
            border-radius: 25px;
            background: linear-gradient(135deg, #0a4d68 0%, #088395 50%, #05bfdb 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            transition: all 0.4s ease;
            cursor: pointer;
            box-shadow: 0 10px 30px rgba(5,191,219,0.3);
            position: relative;
            overflow: hidden;
        }

        .gallery-item::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.3) 50%, transparent 70%);
            transform: rotate(45deg);
            transition: all 0.6s ease;
        }

        .gallery-item:hover::before {
            left: 100%;
            top: 100%;
        }

        .gallery-item:hover {
            transform: scale(1.05) rotateY(5deg);
            box-shadow: 0 20px 60px rgba(5,191,219,0.6);
        }

        .cta-section {
            text-align: center;
            padding: 100px 20px;
            background: linear-gradient(135deg, #0a4d68 0%, #088395 50%, #05bfdb 100%);
            margin-top: 100px;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 30%, rgba(255,255,255,0.1) 0%, transparent 40%),
                radial-gradient(circle at 80% 70%, rgba(255,255,255,0.1) 0%, transparent 40%);
        }

        .cta-section h2 {
            font-size: 3rem;
            margin-bottom: 25px;
            position: relative;
            z-index: 1;
            text-shadow: 0 5px 20px rgba(0,0,0,0.3);
            font-weight: 900;
        }

        .cta-section p {
            font-size: 1.3rem;
            margin-bottom: 40px;
            opacity: 0.95;
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            .hero p {
                font-size: 1.2rem;
            }
            .section-title {
                font-size: 2rem;
            }
            .timeline {
                padding-left: 30px;
            }
            .timeline-item::before {
                left: -40px;
            }
        }
    </style>
</head>
<body>
    <section class="hero">
        <div class="circuit-bg"></div>
        <div class="tech-orbs">
            <div class="orb orb1"></div>
            <div class="orb orb2"></div>
            <div class="orb orb3"></div>
        </div>
        <div class="hero-content">
            <div class="tech-badge">⚡ INNOVATION IN ELECTRONICS</div>
            <h1>⚙️ Teknik Elektronika<br>Industri</h1>
            <p>Kuasai Teknologi Otomasi & Elektronika untuk Industri 4.0<br>Menjadi Teknisi Profesional di Era Digital Manufacturing</p>
            <a href="#kompetensi" class="cta-button">Explore Program</a>
        </div>
    </section>

    <section class="section" id="kompetensi">
        <h2 class="section-title">Program Keahlian</h2>
        <div class="cards">
            <div class="card">
                <div class="card-icon">🔌</div>
                <h3>Instalasi & Maintenance</h3>
                <p>Menguasai instalasi sistem elektronika industri, troubleshooting peralatan elektronik, maintenance preventif dan corrective pada mesin-mesin produksi</p>
            </div>
            <div class="card">
                <div class="card-icon">🤖</div>
                <h3>PLC & Otomasi</h3>
                <p>Pemrograman PLC (Programmable Logic Controller), sistem kontrol otomatis, SCADA, dan integrasi sistem otomasi industri modern</p>
            </div>
            <div class="card">
                <div class="card-icon">⚡</div>
                <h3>Sistem Kontrol</h3>
                <p>Perancangan dan implementasi sistem kontrol elektronik, sensor & aktuator, kontrol motor listrik, dan instrumentasi industri</p>
            </div>
            <div class="card">
                <div class="card-icon">🔧</div>
                <h3>Teknik Digital</h3>
                <p>Elektronika digital, microcontroller (Arduino, ESP32), mikrokontroler AVR, pemrograman embedded system, dan IoT untuk industri</p>
            </div>
            <div class="card">
                <div class="card-icon">📡</div>
                <h3>Komunikasi Data</h3>
                <p>Sistem komunikasi industri, jaringan Ethernet industrial, protokol Modbus, Profibus, dan wireless communication untuk monitoring produksi</p>
            </div>
            <div class="card">
                <div class="card-icon">💡</div>
                <h3>Power Electronics</h3>
                <p>Sistem catu daya industri, inverter, konverter, motor drive, UPS industrial, dan distribusi listrik untuk pabrik manufaktur</p>
            </div>
        </div>
    </section>

    <section class="section">
        <h2 class="section-title">Teknologi & Tools</h2>
        <div class="skills-grid">
            <div class="skill-item">
                <div class="skill-icon">🔷</div>
                <h4>PLC Programming</h4>
            </div>
            <div class="skill-item">
                <div class="skill-icon">📊</div>
                <h4>SCADA</h4>
            </div>
            <div class="skill-item">
                <div class="skill-icon">🎛️</div>
                <h4>HMI Design</h4>
            </div>
            <div class="skill-item">
                <div class="skill-icon">🔌</div>
                <h4>Arduino/ESP32</h4>
            </div>
            <div class="skill-item">
                <div class="skill-icon">📐</div>
                <h4>AutoCAD</h4>
            </div>
            <div class="skill-item">
                <div class="skill-icon">⚙️</div>
                <h4>PCB Design</h4>
            </div>
            <div class="skill-item">
                <div class="skill-icon">🔬</div>
                <h4>Oscilloscope</h4>
            </div>
            <div class="skill-item">
                <div class="skill-icon">🌐</div>
                <h4>IoT Systems</h4>
            </div>
        </div>
    </section>

    <section class="section">
        <h2 class="section-title">Roadmap Pembelajaran</h2>
        <div class="timeline">
            <div class="timeline-item">
                <h4>⚡ Kelas 10: Basic Electronics & Fundamentals</h4>
                <p>Mempelajari dasar elektronika analog dan digital, hukum Ohm, rangkaian listrik, komponen elektronik (resistor, kapasitor, transistor), penggunaan multimeter dan oscilloscope, solder & assembly PCB, serta K3 (Keselamatan dan Kesehatan Kerja) di bidang elektronika.</p>
            </div>
            <div class="timeline-item">
                <h4>🤖 Kelas 11: Industrial Automation & Control Systems</h4>
                <p>Mendalami PLC programming dengan Ladder Diagram, microcontroller programming (Arduino/ESP32), sistem kontrol motor dan pneumatik, sensor & aktuator industri, instalasi panel listrik, SCADA & HMI, serta project automation sederhana. Persiapan sertifikasi kompetensi BNSP.</p>
            </div>
            <div class="timeline-item">
                <h4>🏭 Kelas 12: Industrial Practice & Advanced Application</h4>
                <p>Praktik Kerja Lapangan (PKL) 6-12 bulan di industri manufaktur, pabrik otomotif, atau perusahaan engineering. Mengerjakan project akhir sistem otomasi kompleks, troubleshooting mesin industri, maintenance preventive, dan building portfolio profesional untuk karir sebagai teknisi elektronika industri.</p>
            </div>
        </div>
    </section>

    <section class="section">
        <h2 class="section-title">Statistik & Prestasi</h2>
        <div class="stats">
            <div class="stat-item">
                <div class="stat-number">96%</div>
                <div class="stat-label">Tingkat Kelulusan</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">88%</div>
                <div class="stat-label">Terserap Industri</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">60+</div>
                <div class="stat-label">Industri Partner</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">BNSP</div>
                <div class="stat-label">Certified</div>
            </div>
        </div>
    </section>

    <section class="section">
        <h2 class="section-title">Peluang Karir Industri</h2>
        <div class="cards">
            <div class="card">
                <div class="card-icon">🏭</div>
                <h3>Teknisi Elektronika</h3>
                <p>Maintenance dan repair peralatan elektronik di pabrik manufaktur, otomotif, atau plant industri dengan gaji 5-10 juta/bulan</p>
            </div>
            <div class="card">
                <div class="card-icon">🔧</div>
                <h3>PLC Programmer</h3>
                <p>Membuat dan maintain program otomasi untuk mesin produksi menggunakan PLC Siemens, Mitsubishi, atau Allen-Bradley. Gaji 6-15 juta/bulan</p>
            </div>
            <div class="card">
                <div class="card-icon">⚙️</div>
                <h3>Automation Engineer</h3>
                <p>Merancang sistem otomasi industri, integrasi mesin, dan optimization process produksi dengan gaji 8-18 juta/bulan</p>
            </div>
            <div class="card">
                <div class="card-icon">🔌</div>
                <h3>Electrical Maintenance</h3>
                <p>Pemeliharaan sistem kelistrikan pabrik, panel kontrol, dan distribusi listrik industri dengan gaji 5-12 juta/bulan</p>
            </div>
            <div class="card">
                <div class="card-icon">📊</div>
                <h3>QC Electronics</h3>
                <p>Quality control produk elektronik, testing dan inspection dengan tools profesional di industri elektronika. Gaji 5-10 juta/bulan</p>
            </div>
            <div class="card">
                <div class="card-icon">🎯</div>
                <h3>Instrument Technician</h3>
                <p>Instalasi dan kalibrasi instrument measuring, sensor, dan control system di oil & gas atau manufacturing. Gaji 7-16 juta/bulan</p>
            </div>
        </div>
    </section>

    <section class="section">
        <h2 class="section-title">Fasilitas Laboratorium</h2>
        <div class="gallery">
            <div class="gallery-item">⚡</div>
            <div class="gallery-item">🔧</div>
            <div class="gallery-item">🤖</div>
            <div class="gallery-item">🔬</div>
            <div class="gallery-item">💻</div>
            <div class="gallery-item">🎛️</div>
        </div>
        <p style="text-align: center; margin-top: 40px; color: rgba(255,255,255,0.75); line-height: 1.9; font-size: 1.1rem;">
            Lab Elektronika Analog & Digital • Lab PLC & Otomasi • Lab Microcontroller • Oscilloscope & Multimeter Digital • Trainer PLC Siemens S7-1200 • Panel Simulator • Workstation Assembly • Software CAD & Simulation • IoT Development Board • Power Supply & Function Generator
        </p>
    </section>

    <section class="cta-section">
        <h2>Siap Menjadi Teknisi Elektronika Profesional?</h2>
        <p>Bergabunglah dengan Teknik Elektronika Industri dan bangun karir cemerlang di era Industri 4.0. Raih peluang bekerja di perusahaan multinasional dan industri terkemuka!</p>
        <a href="#" class="cta-button" style="color: #0a4d68; margin-right: 15px;">Daftar Sekarang</a>
        <a href="#" class="cta-button" style="background: transparent; border: 2px solid #fff; color: #fff;">Konsultasi</a>
    </section>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.card, .timeline-item, .stat-item, .skill-item').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s ease';
            observer.observe(el);
        });

        document.querySelectorAll('.gallery-item').forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = 'scale(0.8)';
            item.style.transition = 'all 0.5s ease';
            setTimeout(() => {
                observer.observe(item);
            }, index * 100);
        });

        const stats = document.querySelectorAll('.stat-number');
        const animateStats = (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    const text = target.textContent;
                    const isNumber = !isNaN(parseInt(text));
                    
                    if (isNumber) {
                        const finalNumber = parseInt(text);
                        let current = 0;
                        const increment = finalNumber / 50;
                        const timer = setInterval(() => {
                            current += increment;
                            if (current >= finalNumber) {
                                target.textContent = finalNumber + (text.includes('%') ? '%' : '+');
                                clearInterval(timer);
                            } else {
                                target.textContent = Math.floor(current) + (text.includes('%') ? '%' : '+');
                            }
                        }, 30);
                    }
                }
            });
        };

        const statObserver = new IntersectionObserver(animateStats, {
            threshold: 0.5
        });

        stats.forEach(stat => {
            statObserver.observe(stat);
        });
    </script>
</body>
</html>
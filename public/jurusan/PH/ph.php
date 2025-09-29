<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhotelan - SMK</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #0f0f0f;
            color: #fff;
            overflow-x: hidden;
        }

        .hero {
            position: relative;
            height: 100vh;
            background: linear-gradient(135deg, #c79956 0%, #8b6d3f 50%, #d4af37 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 50%, rgba(255,255,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(255,255,255,0.1) 0%, transparent 50%);
            animation: shimmer 8s ease-in-out infinite;
        }

        @keyframes shimmer {
            0%, 100% { opacity: 0.5; }
            50% { opacity: 1; }
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 20px;
            max-width: 1000px;
        }

        .hero h1 {
            font-size: 4.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            text-shadow: 0 10px 40px rgba(0,0,0,0.5);
            animation: fadeInUp 1s ease;
            letter-spacing: 2px;
        }

        .hero p {
            font-size: 1.6rem;
            margin-bottom: 40px;
            opacity: 0.95;
            animation: fadeInUp 1s ease 0.2s both;
            font-weight: 300;
            letter-spacing: 1px;
        }

        .cta-button {
            display: inline-block;
            padding: 20px 50px;
            background: #fff;
            color: #8b6d3f;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
            transition: all 0.4s ease;
            box-shadow: 0 15px 50px rgba(0,0,0,0.4);
            animation: fadeInUp 1s ease 0.4s both;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .cta-button:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 20px 60px rgba(0,0,0,0.5);
            background: #f5f5f5;
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
        }

        .section-title {
            font-size: 3rem;
            text-align: center;
            margin-bottom: 70px;
            background: linear-gradient(135deg, #c79956 0%, #d4af37 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 35px;
            margin-bottom: 60px;
        }

        .card {
            background: linear-gradient(135deg, rgba(199,153,86,0.1) 0%, rgba(139,109,63,0.1) 100%);
            border-radius: 25px;
            padding: 45px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(199,153,86,0.3);
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
            background: linear-gradient(90deg, #c79956 0%, #d4af37 100%);
            transform: scaleX(0);
            transition: transform 0.5s ease;
        }

        .card:hover {
            transform: translateY(-15px);
            background: linear-gradient(135deg, rgba(199,153,86,0.15) 0%, rgba(139,109,63,0.15) 100%);
            box-shadow: 0 25px 70px rgba(199,153,86,0.4);
            border-color: rgba(199,153,86,0.5);
        }

        .card:hover::before {
            transform: scaleX(1);
        }

        .card-icon {
            font-size: 3.5rem;
            margin-bottom: 25px;
            filter: drop-shadow(0 5px 15px rgba(199,153,86,0.5));
        }

        .card h3 {
            font-size: 1.7rem;
            margin-bottom: 18px;
            color: #fff;
            font-weight: 700;
        }

        .card p {
            color: rgba(255,255,255,0.85);
            line-height: 1.7;
            font-size: 1.05rem;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
            gap: 25px;
        }

        .skill-item {
            background: linear-gradient(135deg, rgba(199,153,86,0.2) 0%, rgba(139,109,63,0.2) 100%);
            padding: 30px;
            border-radius: 20px;
            text-align: center;
            transition: all 0.4s ease;
            border: 1px solid rgba(199,153,86,0.2);
            cursor: pointer;
        }

        .skill-item:hover {
            transform: scale(1.08) rotate(2deg);
            background: linear-gradient(135deg, rgba(199,153,86,0.3) 0%, rgba(139,109,63,0.3) 100%);
            box-shadow: 0 15px 40px rgba(199,153,86,0.3);
        }

        .skill-icon {
            font-size: 3rem;
            margin-bottom: 12px;
            filter: drop-shadow(0 3px 8px rgba(199,153,86,0.4));
        }

        .skill-item h4 {
            font-size: 1.1rem;
            font-weight: 600;
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
            background: linear-gradient(180deg, #c79956 0%, #d4af37 100%);
            border-radius: 2px;
        }

        .timeline-item {
            margin-bottom: 50px;
            position: relative;
            padding: 25px;
            background: rgba(199,153,86,0.05);
            border-radius: 15px;
            border-left: 3px solid transparent;
            transition: all 0.3s ease;
        }

        .timeline-item:hover {
            background: rgba(199,153,86,0.1);
            border-left-color: #c79956;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -60px;
            top: 30px;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: #c79956;
            border: 4px solid #0f0f0f;
            box-shadow: 0 0 20px rgba(199,153,86,0.6);
        }

        .timeline-item h4 {
            font-size: 1.4rem;
            margin-bottom: 12px;
            color: #d4af37;
            font-weight: 700;
        }

        .timeline-item p {
            color: rgba(255,255,255,0.85);
            line-height: 1.7;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 35px;
            text-align: center;
        }

        .stat-item {
            padding: 40px;
            background: linear-gradient(135deg, rgba(199,153,86,0.1) 0%, rgba(139,109,63,0.1) 100%);
            border-radius: 20px;
            border: 1px solid rgba(199,153,86,0.2);
            transition: all 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(199,153,86,0.3);
        }

        .stat-number {
            font-size: 4rem;
            font-weight: 900;
            background: linear-gradient(135deg, #c79956 0%, #d4af37 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 12px;
        }

        .stat-label {
            font-size: 1.15rem;
            color: rgba(255,255,255,0.8);
            font-weight: 500;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .gallery-item {
            height: 220px;
            border-radius: 20px;
            background: linear-gradient(135deg, #c79956 0%, #8b6d3f 50%, #d4af37 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            transition: all 0.4s ease;
            cursor: pointer;
            box-shadow: 0 10px 30px rgba(199,153,86,0.3);
            position: relative;
            overflow: hidden;
        }

        .gallery-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s ease;
        }

        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0 20px 60px rgba(199,153,86,0.5);
        }

        .gallery-item:hover::before {
            left: 100%;
        }

        .cta-section {
            text-align: center;
            padding: 100px 20px;
            background: linear-gradient(135deg, #c79956 0%, #8b6d3f 50%, #d4af37 100%);
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
            background: radial-gradient(circle at 50% 50%, rgba(255,255,255,0.1) 0%, transparent 70%);
        }

        .cta-section h2 {
            font-size: 3rem;
            margin-bottom: 25px;
            position: relative;
            z-index: 1;
            text-shadow: 0 5px 20px rgba(0,0,0,0.3);
        }

        .cta-section p {
            font-size: 1.3rem;
            margin-bottom: 40px;
            opacity: 0.95;
            position: relative;
            z-index: 1;
        }

        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-25px); }
        }

        .luxury-badge {
            display: inline-block;
            padding: 8px 20px;
            background: rgba(255,255,255,0.2);
            border-radius: 30px;
            font-size: 0.9rem;
            margin-bottom: 20px;
            letter-spacing: 2px;
            text-transform: uppercase;
            backdrop-filter: blur(10px);
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
        <div class="hero-content">
            <div class="luxury-badge">✨ Excellence in Hospitality</div>
            <h1 class="floating">🏨 Perhotelan</h1>
            <p>Ciptakan Pengalaman Tak Terlupakan & Wujudkan Karir di Industri Hospitality Dunia</p>
            <a href="#kompetensi" class="cta-button">Mulai Perjalanan</a>
        </div>
    </section>

    <section class="section" id="kompetensi">
        <h2 class="section-title">Apa yang Dipelajari?</h2>
        <div class="cards">
            <div class="card">
                <div class="card-icon">🎩</div>
                <h3>Front Office Operation</h3>
                <p>Menguasai sistem reservasi, check-in/check-out, menangani tamu dengan profesional, dan mengelola operasional resepsionis hotel bintang 5</p>
            </div>
            <div class="card">
                <div class="card-icon">🍽️</div>
                <h3>Food & Beverage Service</h3>
                <p>Teknik pelayanan restoran fine dining, table manner, wine pairing, dan seni menyajikan makanan dengan standar internasional</p>
            </div>
            <div class="card">
                <div class="card-icon">🏠</div>
                <h3>Housekeeping Management</h3>
                <p>Standar kebersihan dan kerapian kamar hotel, linen management, hingga pengelolaan laundry dengan detail yang sempurna</p>
            </div>
            <div class="card">
                <div class="card-icon">👨‍🍳</div>
                <h3>Culinary Arts</h3>
                <p>Dasar memasak continental, Asian cuisine, pastry & bakery, food presentation, dan keamanan pangan dengan standar HACCP</p>
            </div>
            <div class="card">
                <div class="card-icon">🗣️</div>
                <h3>Communication Skills</h3>
                <p>Bahasa Inggris hospitality, bahasa asing tambahan (Mandarin/Jepang), public speaking, dan handling guest complaint secara profesional</p>
            </div>
            <div class="card">
                <div class="card-icon">💼</div>
                <h3>Hotel Management</h3>
                <p>Pengelolaan operasional hotel, revenue management, marketing hospitality, dan leadership dalam industri perhotelan</p>
            </div>
        </div>
    </section>

    <section class="section">
        <h2 class="section-title">Keahlian yang Dikuasai</h2>
        <div class="skills-grid">
            <div class="skill-item">
                <div class="skill-icon">🌐</div>
                <h4>English Fluency</h4>
            </div>
            <div class="skill-item">
                <div class="skill-icon">🎭</div>
                <h4>Guest Handling</h4>
            </div>
            <div class="skill-item">
                <div class="skill-icon">💻</div>
                <h4>Hotel PMS</h4>
            </div>
            <div class="skill-item">
                <div class="skill-icon">🍷</div>
                <h4>Bartending</h4>
            </div>
            <div class="skill-item">
                <div class="skill-icon">🧹</div>
                <h4>Room Cleaning</h4>
            </div>
            <div class="skill-item">
                <div class="skill-icon">☕</div>
                <h4>Barista Skills</h4>
            </div>
            <div class="skill-item">
                <div class="skill-icon">📋</div>
                <h4>Event Planning</h4>
            </div>
            <div class="skill-item">
                <div class="skill-icon">🎨</div>
                <h4>Table Setting</h4>
            </div>
        </div>
    </section>

    <section class="section">
        <h2 class="section-title">Perjalanan Belajar 3 Tahun</h2>
        <div class="timeline">
            <div class="timeline-item">
                <h4>📖 Kelas 10: Foundation & Basic Service</h4>
                <p>Mempelajari dasar-dasar perhotelan, etika hospitality, grooming & personal appearance, basic English conversation, table manner, dan pengenalan departemen hotel. Praktik langsung di training restaurant dan mock hotel room.</p>
            </div>
            <div class="timeline-item">
                <h4>🌟 Kelas 11: Advanced Skills & Specialization</h4>
                <p>Mendalami operasional front office dengan sistem PMS modern, F&B service untuk fine dining, culinary technique, housekeeping standards, dan event management. Sertifikasi kompetensi BNSP dan persiapan prakerin intensif.</p>
            </div>
            <div class="timeline-item">
                <h4>✈️ Kelas 12: Industrial Training & Career Launch</h4>
                <p>Praktik kerja industri 6-12 bulan di hotel bintang 4-5, resort mewah, cruise ship, atau restoran internasional. Networking dengan profesional, membangun portfolio, dan persiapan langsung masuk dunia kerja atau kuliah hospitality.</p>
            </div>
        </div>
    </section>

    <section class="section">
        <h2 class="section-title">Prestasi & Statistik</h2>
        <div class="stats">
            <div class="stat-item">
                <div class="stat-number">98%</div>
                <div class="stat-label">Tingkat Kelulusan</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">92%</div>
                <div class="stat-label">Langsung Bekerja</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">80+</div>
                <div class="stat-label">Partner Hotel</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">5★</div>
                <div class="stat-label">Hotel Partners</div>
            </div>
        </div>
    </section>

    <section class="section">
        <h2 class="section-title">Peluang Karir Global</h2>
        <div class="cards">
            <div class="card">
                <div class="card-icon">🏨</div>
                <h3>Hotel Staff</h3>
                <p>Front office, concierge, atau guest relation di hotel bintang 4-5 dengan gaji 4-8 juta/bulan + tunjangan + tips yang menggiurkan</p>
            </div>
            <div class="card">
                <div class="card-icon">🍴</div>
                <h3>Restaurant Supervisor</h3>
                <p>Mengelola operasional restoran fine dining atau casual dining dengan gaji 5-12 juta/bulan plus service charge</p>
            </div>
            <div class="card">
                <div class="card-icon">🚢</div>
                <h3>Cruise Ship Crew</h3>
                <p>Bekerja di kapal pesiar internasional keliling dunia dengan gaji USD 1.200-3.000/bulan tanpa biaya hidup</p>
            </div>
            <div class="card">
                <div class="card-icon">✈️</div>
                <h3>Flight Attendant</h3>
                <p>Cabin crew maskapai nasional atau internasional dengan gaji 8-25 juta/bulan plus tunjangan terbang</p>
            </div>
            <div class="card">
                <div class="card-icon">🏰</div>
                <h3>Resort Manager</h3>
                <p>Mengelola resort atau villa mewah dengan gaji 10-30 juta/bulan plus akomodasi dan fasilitas premium</p>
            </div>
            <div class="card">
                <div class="card-icon">🌴</div>
                <h3>Tourism Officer</h3>
                <p>Tour guide, travel consultant, atau event organizer untuk wisatawan domestik dan mancanegara</p>
            </div>
        </div>
    </section>

    <section class="section">
        <h2 class="section-title">Fasilitas Training Hotel</h2>
        <div class="gallery">
            <div class="gallery-item">🛏️</div>
            <div class="gallery-item">🍽️</div>
            <div class="gallery-item">👔</div>
            <div class="gallery-item">🏋️</div>
            <div class="gallery-item">📚</div>
            <div class="gallery-item">🎓</div>
        </div>
        <p style="text-align: center; margin-top: 30px; color: rgba(255,255,255,0.7); line-height: 1.8; font-size: 1.1rem;">
            Training Hotel Room • Restaurant Fine Dining • Bar & Coffee Shop • Professional Uniform • Modern Kitchen • Housekeeping Lab • Language Laboratory • Guest Handling Simulator
        </p>
    </section>

    <section class="cta-section">
        <h2>Siap Memulai Karir Hospitality Impianmu?</h2>
        <p>Bergabunglah dengan jurusan Perhotelan dan raih kesempatan berkarir di hotel & resort mewah dunia</p>
        <a href="#" class="cta-button" style="color: #8b6d3f; margin-right: 15px;">Daftar Sekarang</a>
        <a href="#" class="cta-button" style="background: transparent; border: 2px solid #fff; color: #fff;">Info Lebih Lanjut</a>
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
    </script>
</body>
</html>
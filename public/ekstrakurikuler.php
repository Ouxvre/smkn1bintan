<?php
include '../config/config.php';

$query = "SELECT * FROM ekstrakurikuler ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler - SMKN1 Bintan Utara</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf1 100%);
            min-height: 100vh;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .header-section {
            text-align: center;
            margin-top: 100px;
            margin-bottom: 50px;
            animation: fadeInDown 0.6s ease;
        }

        .header-section h1 {
            font-size: 42px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 12px;
            background: black;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .header-section p {
            font-size: 16px;
            color: #7f8c8d;
            font-weight: 400;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 30px;
            animation: fadeInUp 0.8s ease;
        }

        .card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        .card:hover::before {
            transform: scaleX(1);
        }

        .card-img {
            position: relative;
            height: 200px;
            overflow: hidden;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .card:hover .card-img img {
            transform: scale(1.1);
        }

        .card-body {
            padding: 25px;
        }

        .card-title {
            font-size: 22px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 18px;
            line-height: 1.3;
        }

        .card-info {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            font-size: 14px;
            color: #555;
            transition: color 0.3s ease;
        }

        .card-info:hover {
            color: #667eea;
        }

        .card-info .icon {
            width: 36px;
            height: 36px;
            background: #555;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            font-size: 16px;
            flex-shrink: 0;
        }

        .card-desc {
            font-size: 14px;
            color: #7f8c8d;
            line-height: 1.7;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #ecf0f1;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .empty-state {
            text-align: center;
            padding: 80px 20px;
            animation: fadeIn 0.8s ease;
        }

        .empty-state img {
            width: 200px;
            opacity: 0.5;
            margin-bottom: 20px;
        }

        .empty-state h3 {
            font-size: 24px;
            color: #95a5a6;
            margin-bottom: 10px;
        }

        .empty-state p {
            font-size: 16px;
            color: #bdc3c7;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @media (max-width: 768px) {
            .grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .header-section h1 {
                font-size: 32px;
            }

            .card-body {
                padding: 20px;
            }

            .container {
                padding: 30px 15px;
            }
        }

        @media (max-width: 480px) {
            .header-section h1 {
                font-size: 28px;
            }

            .card-title {
                font-size: 18px;
            }

            .card-img {
                height: 180px;
            }
        }
    </style>
</head>

<body>
    <?php include 'include/navbar.php'; ?>

    <div class="container">
        <div class="header-section">
            <h1>Ekstrakurikuler</h1>
            <p>Kembangkan bakat dan minatmu melalui berbagai kegiatan ekstrakurikuler</p>
        </div>

        <div class="grid">
            <?php 
            $count = 0;
            while ($row = mysqli_fetch_assoc($result)) : 
                $count++;
            ?>
            <div class="card">
                <div class="card-img">
                    <img src="assets/image/ekstrakurikuler/<?= htmlspecialchars($row['foto']) ?>"
                        alt="<?= htmlspecialchars($row['nama']) ?>"
                        onerror="this.src='assets/image/default-ekskul.jpg'">
                </div>

                <div class="card-body">
                    <h3 class="card-title"><?= htmlspecialchars($row['nama']) ?></h3>

                    <div class="card-info">
                        <div class="icon">👤</div>
                        <div>
                            <strong>Pembina:</strong><br>
                            <?= htmlspecialchars($row['pembina']) ?>
                        </div>
                    </div>

                    <div class="card-info">
                        <div class="icon">📅</div>
                        <div>
                            <strong>Jadwal:</strong><br>
                            <?= htmlspecialchars($row['jadwal']) ?>
                        </div>
                    </div>

                    <p class="card-desc">
                        <?= htmlspecialchars($row['deskripsi']) ?>
                    </p>
                </div>
            </div>
            <?php endwhile; ?>

            <?php if ($count === 0) : ?>
            <div class="empty-state" style="grid-column: 1 / -1;">
                <h3>📚 Belum Ada Ekstrakurikuler</h3>
                <p>Data ekstrakurikuler akan segera ditampilkan</p>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <?php include 'include/footer.php'; ?>
</body>

</html>
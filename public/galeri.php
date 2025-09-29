<?php include '../config/config.php'?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - SMKN1 BINTAN UTARA</title>
    <style>
    .gallery {
        padding: 60px 0;
        background: #fff;
    }

    .gallery .container {
        max-width: 1000px;
        margin: 0 auto;
    }

    .gallery h2 {
        text-align: center;
        margin-bottom: 40px;
        font-weight: bold;
        font-size: 50px;
    }

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        justify-items: center;
        margin-bottom: 100px;
    }

    .gallery-item {
        width: 100%;
        aspect-ratio: 9 / 7;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.3s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.05);
    }

    .gallery-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 14px rgba(0, 0, 0, 0.15);
    }

    .btn-wrapper {
        text-align: center;
        margin-top: 30px;
    }

    .btn-wrapper .btn {
        padding: 10px 20px;
        background: #2d3b61;
        color: #fff;
        border-radius: 6px;
        text-decoration: none;
        transition: background 0.3s ease;
    }

    .btn-wrapper .btn:hover {
        background: #1b2745;
    }

    @media (max-width: 992px) {
        .gallery-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 600px) {
        .gallery-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background: rgba(0, 0, 0, 0.8);
    }

    .modal-content {
        margin: 5% auto;
        display: block;
        width: 80%;
        /* lebar popup */
        max-width: 900px;
        /* biar nggak terlalu besar */
        aspect-ratio: 16 / 9;
        /* bikin persegi panjang */
        object-fit: cover;
        /* biar isi gambar rapi */
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        animation: zoomIn 0.3s ease;
    }


    #caption {
        margin: 15px auto;
        display: block;
        max-width: 80%;
        text-align: center;
        color: #fff;
        font-size: 18px;
    }

    .close {
        position: absolute;
        top: 20px;
        right: 40px;
        color: #fff;
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover {
        color: #ccc;
    }

    @keyframes zoomIn {
        from {
            transform: scale(0.7);
            opacity: 0;
        }

        to {
            transform: scale(1);
            opacity: 1;
        }
    }
    </style>
</head>

<body>
    <?php include 'include/navbar.php' ?>

    <?php
    $result = mysqli_query($conn, "SELECT * FROM gallery ORDER BY created_at DESC LIMIT 12");
    ?>

    <section class="gallery">
        <div class="container">
            <h2>Galeri Sekolah</h2>
            <div class="gallery-grid">
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="gallery-item">
                    <img src="assets/image/gallery/<?= htmlspecialchars($row['image']) ?>"
                        alt="<?= htmlspecialchars($row['title']) ?>">
                </div>
                <?php endwhile; ?>
            </div>
            <div class="btn-wrapper">
                <a href="gallery.php" class="btn">Find Out More</a>
            </div>
        </div>
    </section>

    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="imgPopup">
        <div id="caption"></div>
    </div>

    <?php include 'include/footer.php' ?>

    <script>
    document.addEventListener("DOMContentLoaded", () => {
        const modal = document.getElementById("myModal");
        const modalImg = document.getElementById("imgPopup");
        const captionText = document.getElementById("caption");
        const closeBtn = document.getElementsByClassName("close")[0];

        document.querySelectorAll(".gallery-item img").forEach(img => {
            img.addEventListener("click", function() {
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            });
        });

        closeBtn.onclick = function() {
            modal.style.display = "none";
        };

        modal.onclick = function(e) {
            if (e.target === modal) {
                modal.style.display = "none";
            }
        };
    });
    </script>
</body>

</html>
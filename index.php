<?php

$products = [
    [
        "nama" => "Laptop ASUS Vivobook",
        "kategori" => "Laptop",
        "harga" => 8500000,
        "stok" => 5,
        "gambar" => "Laptop ASUS Vivobook.jpg"
    ],
    [
        "nama" => "Logitech G102",
        "kategori" => "Mouse",
        "harga" => 350000,
        "stok" => 8,
        "gambar" => "Logitech G102.png"
    ],
    [
        "nama" => "Keychron K2",
        "kategori" => "Keyboard",
        "harga" => 1450000,
        "stok" => 3,
        "gambar" => "Keychron K2.webp"
    ],
    [
        "nama" => "Samsung Galaxy Tab",
        "kategori" => "Tablet",
        "harga" => 6500000,
        "stok" => 0,
        "gambar" => "Samsung Galaxy Tab.webp"
    ],
    [
        "nama" => "JBL Tune 770NC",
        "kategori" => "Headphone",
        "harga" => 1200000,
        "stok" => 6,
        "gambar" => "JBL Tune 770NC.webp"
    ],
    [
        "nama" => "Sandisk 128GB",
        "kategori" => "Storage",
        "harga" => 180000,
        "stok" => 12,
        "gambar" => "Sandisk 128GB.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pamungkas Store</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="navbar">

        <div class="logo">
            Pamungkas Store
        </div>

        <nav>
            <a href="#home">Home</a>
            <a href="#products">Produk</a>
            <a href="#about">Tentang</a>
        </nav>

    </header>


    <section class="hero" id="home">

        <div class="hero-content">

            <p class="hero-small">SELAMAT DATANG DI</p>

            <h1>Pamungkas Store</h1>

            <p>
                Temukan berbagai produk teknologi
                untuk kebutuhan sehari-hari.
            </p>

            <a href="#products" class="hero-button">
                Lihat Produk
            </a>

        </div>

    </section>


    <section class="product-info">

        <p class="section-label">
            PRODUK KAMI
        </p>

        <h2>Koleksi Produk Teknologi</h2>

        <p>
            Ada <?= count($products); ?> produk yang tersedia
        </p>

    </section>


    <section class="products" id="products">

        <div class="product-grid">

            <?php foreach ($products as $product): ?>

                <article class="product-card">

                    <div class="product-image">

                        <img 
                            src="<?= $product["gambar"]; ?>"
                            alt="<?= $product["nama"]; ?>"
                        >

                    </div>

                    <div class="product-content">

                        <span class="category">
                            <?= $product["kategori"]; ?>
                        </span>

                        <h3>
                            <?= $product["nama"]; ?>
                        </h3>

                        <p class="price">
                            Rp<?= number_format($product["harga"], 0, ',', '.'); ?>
                        </p>

                        <p class="stock">
                            Stok: <?= $product["stok"]; ?>
                        </p>


                        <?php if ($product["stok"] > 0): ?>

                            <p class="available">
                                ● Tersedia
                            </p>

                            <button>
                                Beli Sekarang
                            </button>

                        <?php else: ?>

                            <p class="empty">
                                ● Stok Habis
                            </p>

                            <button class="disabled" disabled>
                                Tidak Tersedia
                            </button>

                        <?php endif; ?>


                        <?php if ($product["harga"] >= 1000000): ?>

                            <?php
                            $diskon = $product["harga"] * 10 / 100;
                            $hargaAkhir = $product["harga"] - $diskon;
                            ?>

                            <div class="discount">

                                <p>
                                    Diskon 10%
                                </p>

                                <span>
                                    Harga setelah diskon:
                                    Rp<?= number_format($hargaAkhir, 0, ',', '.'); ?>
                                </span>

                            </div>

                        <?php endif; ?>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

    </section>


    <section class="about" id="about">

        <div class="about-content">

            <p class="section-label">
                TENTANG KAMI
            </p>

            <h2>
                Tentang Pamungkas Store
            </h2>

            <p>
                Pamungkas Store merupakan toko yang menyediakan
                berbagai macam produk teknologi untuk kebutuhan
                sehari-hari.
            </p>

            <p>
                Beberapa produk yang tersedia yaitu laptop,
                mouse, keyboard, tablet, headphone, dan storage.
            </p>

            <p>
                Kami menyediakan produk yang dapat digunakan
                untuk belajar, bekerja, maupun kebutuhan lainnya.
            </p>

        </div>

    </section>


    <footer>

        <h3>
            Pamungkas Store
        </h3>

        <p>
            Toko teknologi untuk berbagai kebutuhan sehari-hari.
        </p>

        <p class="copyright">
            &copy; 2026 Pamungkas Store. All Rights Reserved.
        </p>

    </footer>

</body>

</html>
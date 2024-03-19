<!DOCTYPE html>
<html>
<head>
    <title>Halaman Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .produk {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ccc;
        }

        .gambar-produk {
            width: 100px;
            margin-right: 10px;
        }

        .deskripsi-produk {
            flex-grow: 1;
        }

        .btn-beli {
            background-color: #4CAF50;
            color: white;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    
    <h1>Daftar Produk</h1>

    <?php
    // Array berisi daftar produk, harga, gambar, dan deskripsi
    $produk = array(
        array(
            "nama" => "ROBUX PAKET 1",
            "harga" => "100,000 IDR",
            "gambar" => "https://upload.wikimedia.org/wikipedia/commons/0/09/Robux_2019_Logo_Black.svg",
            "deskripsi" => " Setiap produk mempunyai isi yang berbeda dan akan membuat pengalaman bermain game mu semakin seru"
        ),
        // ... (daftar produk lainnya)
    );

    // Menampilkan daftar produk, harga, gambar, dan deskripsi
    foreach ($produk as $item) {
        echo "<div class='produk'>";
        echo "<img src='" . $item['gambar'] . "' alt='" . $item['nama'] . "' class='gambar-produk'>";
        echo "<div class='deskripsi-produk'>";
        echo "<h3>" . $item['nama'] . "</h3>";
        echo "<p>Harga: " . $item['harga'] . "</p>";
        echo "<p>" . $item['deskripsi'] . "</p>";
        echo "<a href='kasir/struk_pembayaran.php?produk=" . urlencode($item['nama']) . "' class='btn-beli'>Beli</a>";
        echo "</div>";
        echo "</div>";
    }
    ?>

</body>
</html>

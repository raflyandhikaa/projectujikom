<!DOCTYPE html>
<html>
<head>
    <title>Struk Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #000;
        }

        .struk {
            border: 2px solid #000;
            padding: 20px;
            margin: 20px;
        }

        .total {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Struk Pembayaran</h1>

    <?php
    // Ambil data produk dari parameter URL
    $produk = isset($_GET['produk']) ? $_GET['produk'] : "Produk Tidak Ditemukan";

    // Tampilkan struk pembayaran
    echo "<div class='struk'>";
    echo "<h2>Terima kasih telah membeli</h2>";
    echo "<p>Produk: " . $produk . "</p>";
    echo "<p>Harga: ...</p>"; // Tambahkan harga produk
    echo "<p>Total Pembayaran: ...</p>"; // Tambahkan total pembayaran
    echo "</div>";
    ?>

</body>
</html>

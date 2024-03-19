<!DOCTYPE html>
<html>
<head>
    <title>GANI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }
    
    header {
        background-color: #fff;
        padding: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
    }
    
    nav ul li {
        margin-right: 10px;
    }
    
    nav ul li a {
        text-decoration: none;
        color: #333;
        padding: 5px;
    }
    
    .banner {
        background-image: url('banner.jpg');
        background-size: cover;
        height: 300px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        font-size: 24px;
    }
    
    .banner h1 {
        color: black;
    }
    
    .content {
        background-color: #fff;
        padding: 20px;
        margin-top: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    footer {
        background-color: #333;
        color: #fff;
        padding: 10px;
        text-align: center;
    }
    
    .center-button {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    
    .center-button a {
        display: inline-block;
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
    }
</style>

</head>
<body>
    <header>
    <div class="container">
            <nav>
                <ul>
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="produk.php">Produk</a></li>
                    <li><a href="tentang.php">Tentang</a></li>
                    <li><a href="https://api.whatsapp.com/send/?phone=62895621072283&text&type=phone_number&app_absent=0">Kontak</a></li>
                </ul>
                <ul>
                    <?php
                    session_start();
                    if (isset($_SESSION['username'])) {
                        echo '<li><a href="logout.php">Logout</a></li>';
                    } else {
                        echo '<li><a href="login.php">Masuk</a></li>';
                        echo '<li><a href="register.php">Daftar</a></li>';
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </header>
    <div class="banner">
        <h1>Selamat datang di toko toya</h1>
    </div>
    <div class="container">
        <div class="content">
            <h2>Tentang kami</h2>
            <p>Dapatkan produk-produk ROBUX berkualitas dengan harga terjangkau hanya di toko kami! Mulai dari Rp 10.000 saja!</p>
            <p>Kamu bisa melihat harga produk hanya click di bawah ini</p>
            <div class="center-button">
                <a href="pages/produk.php">Lihat Produk</a>
            </div>
        </div>
    </div>
</body>
</html>

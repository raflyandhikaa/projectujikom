<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .logo {
            display: block;
            margin: 0 auto 2rem;
            width: 80px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        button[type="submit"] {
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px; /* Perkecil size nya */
        }
        .create-account {
            margin-top: 1rem;
            text-align: center;
        }
        .create-account a {
            color: #333;
            text-decoration: none;
        }
        .logo img {
            width: 80px; /* Ukuran gambar yang lebih kecil */
            display: block;
            margin: 5 auto; /* Menempatkan gambar di tengah */
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="../assets/images/resk.jpeg" alt="RESK" class="RESK">
        <form method="POST" action="proses_register.php">
            <label for="nama">Nama</label>
            <input id="nama" name="nama" type="text" placeholder="Nama" required>
            <label for="username">Username</label>
            <input id="username" name="username" type="text" placeholder="Username" required>
            <label for="password">Password</label>
            <input id="password" name="password" type="password" placeholder="Password" required>
            <button type="submit">Register</button>
            <div class="create-account">
                <p>Sudah punya akun? <a href="login.php">Click Disini</a></p>
            </div>
        </form>
    </div>
</body>
</html>

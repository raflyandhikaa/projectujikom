<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .logo {
            width: 100px;
            margin-bottom: 2rem;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
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
            font-size: 14px;
        }
        .create-account {
            margin-top: 1rem;
        }
        .create-account a {
            color: #333;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://media.discordapp.net/attachments/1199739265312112741/1206934935705747556/login-icon-3048.png?ex=65ddd0c0&is=65cb5bc0&hm=b34037a2264f13deb3b226fc312bb4d68cae5bd8cf8da420f21049dad6f2b08f&=&format=webp&quality=lossless&width=637&height=637" alt="Logo" class="logo">
        <form method="POST" action="proses_login.php">
            <label for="username">Username</label>
            <input id="username" name="username" type="text" placeholder="Username" required>
            <label for="password">Password</label>
            <input id="password" name="password" type="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <div class="create-account">
                <p>Belum punya akun? <a href="register.php">REGISTER DI SINI</a></p>
            </div>
        </form>
    </div>
</body>
</html>

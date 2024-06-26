<?php
session_start();
require_once('../../db/DB_connection.php');

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: ../index.php');
    exit;
}

$realName = $_SESSION['nama'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/style/dashboard.css">
    <link rel="stylesheet" href="../../assets/style/navbar.css">
</head>
<body>
    <?php
    include '../navbar.php'; 
    ?>
    <h1>Hello, <?php echo htmlspecialchars($realName);?>! Welcome to the dashboard</h1>
    <div class="dashboard-content">
    <h2>Dashboard</h2>
    <p>Welcome to the RESK SHOES WEB. you can manage product and perform other tasks here.</p>
    </div>
    <center>
        <img style="width: 250px; margin-bottom: 2rem; " src="../../assets/images/resk.jpeg" alt="RESK">
    </center>
</body>
</html>
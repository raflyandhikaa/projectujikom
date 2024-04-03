<?php
// process-register.php

// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_cashier";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Capture data from the registration form
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

// Execute the SQL INSERT statement to add the user to the database
$sql = "INSERT INTO users (nama, username, password) VALUES ('$nama', '$username', '$password')";
// ... (previous code remains unchanged)

if ($conn->query($sql) === TRUE) {
    echo "Akun berhasil di buat. <a href='login.php'>Klik di sini untuk ke login</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


<?php 
$server = "localhost"; 
$user = "root"; 
$pass = "password_database"; 
$database = "test"; 
$conn = mysqli_connect($server, $username, $password, $database); 
if (!$conn) { 
    die("Koneksi ke database gagal: " . mysqli_connect_error()); 
} 
?>

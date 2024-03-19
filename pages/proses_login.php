<?php
session_start(); // Mulai session

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database_toko";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prevent SQL injection by using prepared statements
    $stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Store the username in the session
        $_SESSION['username'] = $username;
        header("Location: index.php");  // Redirect to the dashboard after successful login
        exit(); 
    } else {
        echo "Invalid username or password. Please try again.";  // Display error message if the credentials are invalid
    }
}
?>

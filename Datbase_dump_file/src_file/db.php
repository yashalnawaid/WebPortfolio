<?php
// Database configuration
$host = "localhost";  // Hostname
$username = "root";  // Database username
$password = "";  // Database password
$dbname = "hospital";  // Database name

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check if connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Perform database operations


?>

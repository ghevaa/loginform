<?php
// Database configuration
$host = 'localhost';
$dbname = 'login_system';
$username = 'root'; // Change this if you have a different database username
$password = ''; // Change this if you have a database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>

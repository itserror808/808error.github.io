<?php
// Database configuration
$dbHost = 'localhost';      // Replace with your database host
$dbName = 'error_808';  // Replace with your database name
$dbUser = 'root';       // Replace with your database username
$dbPass = '';       // Replace with your database password

// Create a new PDO instance
try {
    $pdo = new PDO("mysql:host={$dbHost};dbname={$dbName}", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

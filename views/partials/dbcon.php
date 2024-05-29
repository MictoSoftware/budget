<?php
$servername = "localhost";
$username = "root";
$password = "Micto120121!";
$database = "bmis";

try {
    // Create Connection
    $dsn = "mysql:host=$servername;dbname=$database";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];
    $connection = new PDO($dsn, $username, $password, $options);
    
    // If you want to explicitly confirm the connection is successful, you can add:
   
} catch (PDOException $e) {
    // Check Connection
    die("Connection Failed: " . $e->getMessage());
}
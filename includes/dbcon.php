<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "bmis";

    // Create Connection
    $connection = new mysqli($servername, $username, $password, $database);

    // Check Connection
    if ($connection->connect_error) {
        die("Connection Failed: " . $connection->connect_error);
    }
?> 
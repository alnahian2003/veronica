<?php

// $host = "localhost";
// $dbname = "veronica";
// $username = "root";
// $password = "";

try {
    // $dsn = "mysql:host=$host;dbname=$dbname";
    $dsn = "sqlite:database.sqlite";
    $pdo = new PDO($dsn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}

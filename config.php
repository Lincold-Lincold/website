<?php
$host = 'localhost';
$dbname = 'tasktracker';
$username = 'root';
$password = '';

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $username, $password);
}catch (PDOException $error) {
    exit('Database connection failed: ' . $error->getMessage());
}
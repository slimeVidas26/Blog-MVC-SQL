<?php
$host = '127.0.0.1';
$dbname   = 'test';
$user = 'root';
$pass = '';
$charset = 'utf8';
$dsn = "mysql:host={$host};dbname={$dbname};charset={$charset}";

try {
    $conn = new PDO($dsn, $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}
Catch (PDOException $e) {
    echo 'DB CONNECT ERROR: '.$e->getMessage();
    die;
}
?>
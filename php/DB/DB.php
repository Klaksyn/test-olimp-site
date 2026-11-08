<?php

$host = 'localhost';
$db = 'olimp';
$user = 'root';
$password = '';
$charset = 'utf8';

$dsn = "mysql:host=$host; dbname=$db; charset=$charset";

$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATR_DEFAULT_FETCH_MODE = PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES = false,
];

try {
    $pdo = new PDO($dsn, $user, $password, $opt);
    echo "Connection success";
} catch (PDOException $PDOE) {
    echo "Connection Failed: " . $PDOE->getMessage();
}
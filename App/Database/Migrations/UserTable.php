<?php

require_once __DIR__ . '/App/Database/DB.php';

use App\Database\DB;

try {
    $pdo = DB:Get();

    $sql = "
        CREATE TABLE IF NOT EXISTS `users` (
            `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            `first_name` VARCHAR(100) NOT NULL,
            `last_name` VARCHAR(100) NOT NULL,
            `phone` VARCHAR(30) DEFAULT NULL,
            `email` VARCHAR(150) NOT NULL UNIQUE,
            `github` VARCHAR(255) DEFAULT NULL,
            `linkedin` VARCHAR(255) DEFAULT NULL,
            `study` VARCHAR(255) DEFAULT NULL,
            `avatar` VARCHAR(255) DEFAULT NULL,
            `about` TEXT DEFAULT NULL,
            `skills` TEXT DEFAULT NULL,
            `achievements` TEXT DEFAULT NULL,
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    ";

    $pdo->exec($sql);

    echo "migrate success";

} catch(PDOException $pdoe) {
    echo "error: " . $pdoe->getMessage();
}
<?php

namespace App\Database;

use PDO;

class DB {
    private static ?PDO $pdo = null;

    private static $host = 'MariaDB-10.4';
    private static $db = 'olimp';
    private static $user = 'root';
    private static $password = '';
    private static $charset = 'utf8mb4';
    private static $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    public static function Get(): PDO {
        if (self::$pdo === null) {
            $dsn = "mysql:host=".self::$host.";dbname=".self::$db.";charset=".self::$charset;
            self::$pdo = new PDO($dsn, self::$user, self::$password, self::$opt);
        }

        return self::$pdo;
    }
}
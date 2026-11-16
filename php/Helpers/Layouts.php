<?php

namespace App\Helpers;

class Layouts {

    public static function header(): void {
        $path = dirname(__DIR__, 1) . '/layouts/partials/header/header.php';
        
        if (file_exists($path)) {
            require_once $path;
        } else {
            die('Ошибка: header не найден');
        }
    }

}
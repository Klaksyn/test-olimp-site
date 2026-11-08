<?php

class Response {
    public static function redirect(string $path): void {
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_write_close();
        }

        header("Location: " . $path, true, 302);

        exit();
    }
}
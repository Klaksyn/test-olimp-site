<?php

namespace App\Models;

require_once dirname(__DIR__, 1) . '/Database/DB.php';

use App\Database\DB;

class User {

    public static function findById(int $id): array {
        $stmt = DB::Get()->prepare('SELECT id, first_name, last_name, phone, email, 
                                    site, github, linkedin, study, avatar, about, 
                                    skills, achievements, created_at, updated_at 
                                    FROM users
                                    WHERE id=:id');
        $stmt->execute(['id' => $id]);

        return $stmt->fetch() ?: null;
    }
}
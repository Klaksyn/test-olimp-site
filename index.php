<?php

require_once __DIR__ . '/App/Models/User.php';
require_once __DIR__ . '/App/Helpers/Layouts.php';
require_once __DIR__ . '/App/layouts/partials/Icons/Icons.php';

use App\Helpers\Layouts;
use App\Models\User;

$userData = User::findById(1);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль</title>

    <link href="resources/css/profile.css" rel="stylesheet" type="text/css"  />
</head>
<body>
    <header>
        <?php Layouts::header(); ?>
    </header>

    <main>
        <div class="left">
            <div class="avatar_main">
                <img src="" alt="" />
            </div>
            <div class="about">
                <h3><?= htmlspecialchars($userData['first_name']); ?></h3>
                <div class="about_left">
                    <div class="phone">
                        <span><?= Icons::Phone(); ?></span>
                        <span></span>
                    </div>

                    <div class="mail">
                        <span><?= Icons::Email(); ?></span>
                        <span></span>
                    </div>
    
                    <div class="browser">
                        <span><?= Icons::Browser(); ?></span>
                        <span></span>
                    </div>

                    <div class="github">
                        <span><?= Icons::GitHub(); ?></span>
                        <span></span>
                    </div>

                    <div class="linkedin">
                        <span><?= Icons::LinkedIn(); ?></span>
                        <span></span>
                    </div>
                </div>

                <div class="about_right">
                    <div class="student">
                        <span><?= Icons::Student(); ?></span>
                        <span></span>
                    </div>
                </div>
            </div>
    </main>

    <footer>

    </footer>
</body>
</html>
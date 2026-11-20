<?php

require_once __DIR__ . '/php/Helpers/Layouts.php';
require_once __DIR__ . '/php/layouts/partials/Icons/Icons.php';

use App\Helpers\Layouts;

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
                <h3></h3>
                <div class="phone">
                    <span><?= Icons::Phone(); ?></span>
                    <span></span>
                </div>

                <div class="mail">
                    <span><?= Icons::Email() ?></span>
                    <span></span>
                </div>

                <div class="browser">
                    <span><?= Icons::Browser() ?></span>
                    <span></span>
                </div>

                <div class="github">
                    <span><?= Icons::GitHub() ?></span>
                    <span></span>
                </div>

                <div class="linkedin">
                    <span><?= Icons::LinkedIn() ?></span>
                    <span></span>
                </div>

                <div class="student">
                    <span><?= Icons::Student() ?></span>
                    <span></span>
                </div>
            </div>
        </div>
    </main>

    <footer>

    </footer>
</body>
</html>
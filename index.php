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

    <link href="resources/css/profile/main.css" rel="stylesheet" type="text/css"  />
</head>
<body>
    <header>
        <?php Layouts::header(); ?>
    </header>

    <main>
        <div class="about_user">
            <div class="left">
                <div class="avatar_main">
                    <img src="<?= htmlspecialchars($userData['avatar']) ?>" alt="" />
                </div>
                <div class="about">
                    <h3><?= htmlspecialchars($userData['first_name'] . " " . $userData['last_name']); ?></h3>
                    <div class="about_left">
                        <div class="phone">
                            <span><?= Icons::Phone(); ?></span>
                            <span><?= htmlspecialchars($userData['phone'] ?? '') ?></span>
                        </div>

                        <div class="mail">
                            <span><?= Icons::Email(); ?></span>
                            <span><?= htmlspecialchars($userData['email'] ?? '') ?></span>
                        </div>

                        <div class="browser">
                            <span><?= Icons::Browser(); ?></span>
                            <span><?= htmlspecialchars($userData['site'] ?? '') ?></span>
                        </div>

                        <div class="github">
                            <span><?= Icons::GitHub(); ?></span>
                            <span><?= htmlspecialchars($userData['github'] ?? '') ?></span>
                        </div>

                        <div class="linkedin">
                            <span><?= Icons::LinkedIn(); ?></span>
                            <span><?= htmlspecialchars($userData['linkedin'] ?? '') ?></span>
                        </div>
                    </div>

                    <div class="about_right">
                        <div class="student">
                            <span><?= Icons::Student(); ?></span>
                            <span><?= htmlspecialchars($userData['study'] ?? '') ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="right">
                <div class="title">
                    <a class="requests selected" href="">Requests</a>
                    <span>|</span>
                    <a class="invite unselect" href="">Invite</a> 
                </div>

                <div class="menu"> 
                    <div class="received">

                        <div class="request-block">
                            <h3>PROJECT CROM</h3>
                            <div class="request-user"> <!-- max 5 user -->
                                <?php foreach ()  { ?>
                                    <img src="" class="avatar" alt="avatar" />
                                    <div class="user-text">
                                        <h4>Viktor</h4>
                                        <p>Connections Workshop</p>
                                    </div>

                                    <form action="" method="POST" class="btns">
                                        <button type="submit" class="btn_accept">
                                            <img src="" alt="" />Accept
                                        </button>
                                        <button type="submit" class="btn_decline">
                                            <img src="" alt="" />Decline
                                        </button>
                                    </form>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="request-block">
                            <h3>DEVQUEST</h3>
                            <div class="request-user">
                                <?php foreach ()  { ?>
                                    <img src="" class="avatar" alt="avatar" />
                                    <div class="user-text">
                                        <h4>Viktor</h4>
                                        <p>Connections Workshop</p>
                                    </div>

                                    <form action="" method="POST" class="btns">
                                        <button type="submit" class="btn_accept">
                                            <img src="" alt="" />Accept
                                        </button>
                                        <button type="submit" class="btn_decline">
                                            <img src="" alt="" />Decline
                                        </button>
                                    </form>
                                <?php } ?>
                            </div>
                        </div>

                    </div>

                    <div class="sent" style="display: none;">
                    </div>
                </div>


                <div class="about">
                    <h1>About Me</h1>
                    <input type="text" value="" /> 

                    
                    <h1>Skills</h1>
                    <input type="text" value="" />

                    
                    <h1>Achievements</h1>
                    <input type="text" value="" />
                </div>



            </div>
        </div>
    </main>

    <footer>

    </footer>

    <script src="resources/js/text/selectText.js"></script>
</body>
</html>
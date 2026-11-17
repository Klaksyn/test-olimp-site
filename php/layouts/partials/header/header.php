<?php

require_once __DIR__ . '/Icons/Icons.php';

?>

<div class="head">
    <div class="block_before_search">
        <a class="icon_home" href="">
            <?= Icons::Home(); ?>
        </a>
        <a class="link_home" href="">Личный кабинет</a>
    </div>

    <div class="search">
        <input type="text" placeholder="Search projects......" name="query" />
        <a href="" class="icon_search"><?= Icons::Search(); ?></a>
    </div>

    <div class="block_after_search">
        <div class="btn_new_project">
            <a href="" class="icon_add"><?= Icons::Add(); ?></a>
            <a href="">New Project</a>
        </div>

        <a href="" class="avatar">
            <img src="" />
        </a>
    </div>

</div>

<div class="head_nav">
    <nav>
        <ul class="header_menu_list">
           <li class="header_menu_items">
                <a href="" class="header_menu_link">
                   Ideas
                </a>

                <a href="" class="header_menu_link">
                    Projects
                </a>

                <a href="" class="header_menu_link">
                    Developers
                </a>

                <a href="" class="header_menu_link">
                    My Profile
                </a>
           </li>
        </ul>
    </nav>
</div>
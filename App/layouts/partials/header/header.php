<?php

require_once dirname(__DIR__, 1) . '/Icons/Icons.php';
require_once dirname(__DIR__, 3) . '/Models/User.php';

use App\Models\User;

$userData = User::findById(1);

?>

<div class="head">
   <nav>
        <ul class="header_menu_list">
            <li class="header_menu_items">
                <a class="icon_home" href="">
                    <span class="icon_box"><?= Icons::Home(); ?></span>
                    <span class="link_home">Личный кабинет</span>
                </a>
            </li>
            <li class="header_menu_items search_item">
                <form action="" method="GET">
                    <div class="search">
                        <input type="text" placeholder="Search projects......" name="query" />
                        <a href="" class="icon_search"><?= Icons::Search(); ?></a>
                    </div>
                </form>
            </li>
            <li class="header_menu_items">
                <a href="" class="btn_new_project">
                    <span class="icon_add"><?= Icons::Add(); ?></span>
                    <span class="text_btn-new-project">New Project</span>
                </a>
            </li>
            <li class="header_menu_items">
                <a href="" class="avatar">
                    <img src="<?= htmlspecialchars($userData['avatar']) ?>" alt="" />
                </a>
            </li>
        </ul>
   </nav>
</div>

<div class="head_nav">
    <nav>
        <ul class="header_menu_list">
           <li class="header_menu_items">  
                <a href="" class="header_menu_link">
                   Ideas
                </a>
           </li>
           <li class="header_menu_items">  
               <a href="" class="header_menu_link">
                    Projects
                </a> 
           </li>
           <li class="header_menu_items">  
               <a href="" class="header_menu_link">
                    Developers
                </a>
           </li>
           <li class="header_menu_items">  
               <a href="" class="header_menu_link">
                    My Profile
                </a>
           </li>
        </ul>
    </nav>
</div>
<?= 'home page<br>' ?>

<?php

/**
 * Вывод меню
 **/

wp_nav_menu(array(
    'theme_location' => 'menu-header',
    'container' => '', // Удаляем контейнер оборачивающий меню
    'items_wrap' => '%3$s', // Удаляем <ul> первого уровня
    'walker' => new Header_Walker_Nav_Menu(),
));

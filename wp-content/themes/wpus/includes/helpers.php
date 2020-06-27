<?php

/*
 * Получение даты последнего изменения файла
 */
function get_file_timestamp($path)
{

    $path = THEME_PATH . $path;
    return filemtime($path);

}

/*
 * Функция человеческого вывода var_dump() с принудительным завершением выполнения PHP
 */
function dd($data) {
    echo '<pre style="z-index: 9999; margin: 0.5rem 0; padding: 1rem; font-family: monospace; color: white; background-color: black;">';
    var_dump($data);
    echo '</pre>';
    die();
}
/*
 * Функция человеческого вывода var_dump()
 */
function dump($data) {
    echo '<pre style="z-index: 9999; margin: 0.5rem 0; padding: 1rem; font-family: monospace; color: white; background-color: black;">';
    var_dump($data);
    echo '</pre>';
}



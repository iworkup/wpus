<?php

/**
 * Регистрация новых категорий для блоков Gutenberg
 */
add_filter( 'block_categories', 'wpus_custom_block_category', 10, 2 );

function wpus_custom_block_category( $default_categories, $post ) {

    /**
     * Указываем, для какого типа записи категория
     */
    if ( $post->post_type !== 'books' ) {
        return $default_categories;
    }

    /**
     * Создаём новые категории
     */
    $new_categories = array(
        array(
            'slug'  => 'home-category',
            'title' => 'Главная страница',
            'icon'  => ''
        ),
        array(
            'slug'  => 'faq-category',
            'title' => 'Вопрос-ответ',
            'icon'  => ''
        ),
        array(
            'slug'  => 'links-category',
            'title' => 'Полезные ссылки',
            'icon'  => ''
        ),
        array(
            'slug'  => 'news-category',
            'title' => 'Публикации СМИ',
            'icon'  => ''
        ),
    );

    /**
     * Объединяем новый категории с имеющимися и возвращаем одним массивом
     */
    return array_merge(
        $new_categories,
        $default_categories
    );

}
<?php

/**
 * Регистрация новых категорий для блоков Gutenberg
 */
add_filter( 'block_categories', 'wpus_custom_block_category', 10, 2 );

function wpus_custom_block_category( $default_categories, $post ) {

    /**
     * Указываем, для какого типа записи категория
     */
    if ( $post->post_type !== 'page' ) {
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
     * Заметьте, что очерёдность объединения массивов диктует позицию добавления новых категорий в список категорий. В данном случае - новые категории будут выводиться вначале списка (после часто используемых).
     */
    return array_merge(
        $new_categories,
        $default_categories
    );

}

function my_deregister_scripts(){
    wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );
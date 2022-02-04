<?php

register_taxonomy(
    'book_authors',
    array('books'),
    array(
        'label' => '', // определяется параметром $labels->name
        'labels' => array(
            'name' => 'Авторы',
            'singular_name' => 'Автора',
            'search_items' => 'Искать автора',
            'all_items' => 'Все авторы',
            'view_item ' => 'Посмотреть автора',
            'parent_item' => 'Родительские авторы',
            'parent_item_colon' => 'Родительские авторы',
            'edit_item' => 'Изменить автора',
            'update_item' => 'Обновить автора',
            'add_new_item' => 'Добавить автора',
            'new_item_name' => 'Добавить автора',
            'menu_name' => 'Авторы',
        ),
        'description' => '', // описание таксономии
        'public' => true,
        //'publicly_queryable'    => null, // равен аргументу public
        //'show_in_nav_menus'     => true, // равен аргументу public
        'show_ui'               => true, // равен аргументу public
        //'show_in_menu'          => true, // равен аргументу show_ui
        //'show_tagcloud'         => true, // равен аргументу show_ui
        //'show_in_quick_edit'    => true, // равен аргументу show_ui
        'hierarchical' => true,
        'rewrite' => true,
        //'query_var'             => $taxonomy, // название параметра запроса
        'capabilities' => array(),
        'meta_box_cb' => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
        //'show_admin_column' => true, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
        'show_in_rest' => true, // добавить в REST API
        'rest_base' => null, // $taxonomy
        // '_builtin'              => false,
        //'update_count_callback' => '_update_post_term_count',
    )
);
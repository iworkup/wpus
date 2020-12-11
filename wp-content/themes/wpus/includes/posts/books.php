<?php

register_post_type(
    'books',
    array(
        'label' => 'Книги', // Название типа записи, отображаемого в меню. Обычно во множественном числе. По умолчанию используется значение $labels ['name'].
        'labels' => array(
            'name' => 'Книги', // основное название для типа записи
            'singular_name' => 'Книгу', // название подпункта админ-бара Добавить
            'add_new' => 'Добавить книгу', // название второго подпункта сайдбар-меню и кнопки на странице всех записей
            'add_new_item' => 'Добавление книги', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование книги', // для редактирования типа записи
            'new_item' => 'Новая книга', // текст новой записи
            'view_item' => 'Смотреть книгу', // для просмотра записи этого типа.
            'view_items' => 'Смотреть книги',
            'search_items' => 'Искать книгу', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'all_items' => 'Все книги', // название первого подпункта в сайдбар-меню админки
            'archives' => 'Архив книг', //
            'attributes' => 'Параметры книги', // Заголовок блока page-attributes
            'insert_into_item' => 'insert_into_item', //
            'uploaded_to_this_item' => 'uploaded_to_this_item', //
            'featured_image' => 'Обложка книги', // Заголовок блока выбора превью изображения
            'set_featured_image' => 'Выбрать', // Заголовок области выбора превью изображения
            'remove_featured_image' => 'Удалить обложку', // Ссылка удаления превью изображения
            'use_featured_image' => 'Использовать', //
            'menu_name' => 'Книги', // название меню
            //'filter_items_list' => null, //
            //'items_list_navigation' => null, //
            //'items_list' => null, //
            'item_published' => 'Книга опубликована', //
            //'item_published_privately' => null, //
            //'item_reverted_to_draft' => 'null', //
            //'item_scheduled' => null, //
            'item_updated' => 'Книга обновлена', //
        ),
        //'description' => '', // Короткое описание этого типа записи. Значение используется в REST API.
        'public' => true, // Определяет является ли тип записи публичным или нет. На основе этого параметра строятся много других, т.е. это своего рода пред-установка для следующих параметров: show_ui, publicly_queryable, exclude_from_search, show_in_nav_menus
        'hierarchical' => false, // Будут ли записи этого типа иметь древовидную структуру (как постоянные страницы).
        //'exclude_from_search' => null, // Исключить ли этот тип записей из поиска по сайту. Зависит от public (обратное значение).
        //'publicly_queryable'  => true, // Включить публичный просмотр записей этого типа - это значит что во фронт-энде будут работать URL запросы для этого типа записей. Зависит от public
        'show_ui' => true, // зависит от public
        'show_in_menu' => true, // показывать ли в меню адмнки
        'show_in_nav_menus' => true, // зависит от public
        'show_in_admin_bar' => true, // Отображать в админ-баре
        'show_in_rest' => true, // Нужно ли включать тип записи в REST API. true — добавит тип записи в маршрут wp/v2. Включает Gutenberg
        //'rest_base' => null, // Ярлык в REST API. По умолчанию, название типа записи.
        //'rest_controller_class' => null, // REST API Controller class name. Default is 'WP_REST_Posts_Controller'.
        'menu_position' => 4,
        //'menu_icon' => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'supports' => array('title', 'editor', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        //'register_meta_box_cb' => null, // Provide a callback function that sets up the meta boxes for the edit form. Do remove_meta_box() and add_meta_box() calls in the callback. Default null.
        'taxonomies' => array('book_authors'),
        'has_archive' => true,
        //'rewrite' => true, // or array
        'query_var' => true,
        'can_export' => true, // Возможность экспорта этого типа записей.
        'delete_with_user' => false, // Удалять записи этого типа принадлежащие пользователю при удалении пользователя. Если включена корзина, записи не удаляться, а поместятся в корзину.
        //'_builtin' => true, // FOR INTERNAL USE ONLY! True if this post type is a native or "built-in" post_type. Default false.
        //'_edit_link' => true, // FOR INTERNAL USE ONLY! URL segment to use for edit link of this post type. Default 'post.php?post=%d'.
    )
);
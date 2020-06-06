<?php

if (!function_exists('wpus_setup')) :

    function wpus_setup()
    {

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        register_nav_menus(
            array(
                'menu-header' => 'Верхнее меню',
                'menu-footer' => 'Нижнее меню'
            )
        );

        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'script',
                'style',
            )
        );

    }

endif;

add_action('after_setup_theme', 'wpus_setup');

/**
 * Подключение стилей и скриптов.
 */

function wpus_assets()
{

    wp_enqueue_style('wpus-default-styles', get_stylesheet_uri(), array(), get_file_timestamp('/style.css'));
    wp_enqueue_style('wpus-styles', get_template_directory_uri() . '/assets/css/styles.css', array(), get_file_timestamp('/assets/css/styles.css'));
    wp_enqueue_script('wpus-scripts', get_theme_file_uri('/assets/js/scripts.js'), array(), get_file_timestamp('/assets/js/scripts.js'), true);

}

add_action('wp_enqueue_scripts', 'wpus_assets');


/**
 * Подключение ACF PRO 5.8.11
 */

require_once get_template_directory() . '/includes/vendors/init.php';

/**
 * Подключение файлов темы
 */

require_once get_template_directory() . '/includes/helpers.php';

require_once get_template_directory() . '/includes/menu.php';

require_once get_template_directory() . '/includes/posts/init.php';

require_once get_template_directory() . '/includes/fields/init.php';

require_once get_template_directory() . '/includes/blocks/init.php';




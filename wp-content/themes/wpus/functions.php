<?php

define('THEME_PATH', __DIR__);
define('THEME_URI', get_stylesheet_directory_uri());

if (!function_exists('wpus_setup')) :

    function wpus_setup()
    {

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        add_theme_support('widgets');

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

    wp_enqueue_style('wpus-default-styles', THEME_URI . '/style.css', array(), get_file_timestamp('/style.css'));
    wp_enqueue_style('wpus-styles', THEME_URI . '/assets/css/styles.css', array(), get_file_timestamp('/assets/css/styles.css'));
    wp_enqueue_script('wpus-scripts', THEME_URI . '/assets/js/scripts.js', array(), get_file_timestamp('/assets/js/scripts.js'), true);

}

add_action('wp_enqueue_scripts', 'wpus_assets');


/**
 * Подключение ACF PRO 5.8.11
 */

require_once THEME_PATH . '/includes/vendors/init.php';

/**
 * Подключение файлов темы
 */

require_once THEME_PATH . '/includes/helpers.php';

require_once THEME_PATH . '/includes/hooks.php';

require_once THEME_PATH . '/includes/menu.php';

require_once THEME_PATH . '/includes/posts/init.php';

require_once THEME_PATH . '/includes/taxonomies/init.php';

require_once THEME_PATH . '/includes/fields/init.php';

require_once THEME_PATH . '/includes/blocks/init.php';

require_once THEME_PATH . '/includes/widgets/init.php';




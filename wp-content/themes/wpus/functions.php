<?php

if ( ! function_exists( 'wpus_setup' ) ) :

	function wpus_setup() {

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-primary' => 'Главное меню',
				'menu-footer' => 'Нижнее меню'
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
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

add_action( 'after_setup_theme', 'wpus_setup' );

/**
 * Подключение стилей и скриптов.
 */

function wpus_assets() {

	wp_enqueue_style( 'wpus-default-styles', get_stylesheet_uri(), array(), get_file_timestamp('/style.css') );
    wp_enqueue_style( 'wpus-styles', get_template_directory_uri() . '/assets/css/styles.css', array(), get_file_timestamp('/assets/css/styles.css') );
    wp_enqueue_script( 'wpus-scripts', get_theme_file_uri( '/assets/js/scripts.js' ), array(), get_file_timestamp('/assets/js/scripts.js'), true );

}

add_action( 'wp_enqueue_scripts', 'wpus_assets' );

/**
 * Подключение файлов темы
 */

require_once get_template_directory() . '/includes/helpers.php';

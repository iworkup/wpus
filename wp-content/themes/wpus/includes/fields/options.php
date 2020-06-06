<?php


/**
 * Регистрация страницы Настройки
 */

if (function_exists('acf_add_options_page')):

    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme_general_settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Header Settings',
        'menu_title' => 'Header',
        'parent_slug' => 'theme_general_settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Footer Settings',
        'menu_title' => 'Footer',
        'parent_slug' => 'theme_general_settings',
    ));

endif;

/**
 * Поля ACF для страницы Настройки
 */

if (function_exists('acf_add_local_field_group')):

    acf_add_local_field_group(array(
        'key' => 'theme_general_settings_fields',
        'title' => 'Основные данные',
        'fields' => array(
            array(
                'key' => 'address',
                'name' => 'address',
                'label' => 'Адрес',
                'type' => 'text',
            ),
            array(
                'key' => 'email',
                'name' => 'email',
                'label' => 'E-mail',
                'type' => 'text',
            ),
            array(
                'key' => 'copyright',
                'name' => 'copyright',
                'label' => 'Копирайт',
                'type' => 'text',
            ),
            array(
                'key' => 'logotype',
                'name' => 'logotype',
                'label' => 'Логотип',
                'type' => 'image',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme_general_settings',
                ),
            ),
        ),
    ));

endif;
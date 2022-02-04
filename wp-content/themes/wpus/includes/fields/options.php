<?php

/*
 * Регистрация страницы Настройки
 */

if (function_exists('acf_add_options_page')):

    acf_add_options_page(array(
        'page_title' => 'Страница настроек темы',
        'menu_title' => 'Настройки темы',
        'menu_slug' => 'theme_general_settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

endif;

if (function_exists('acf_add_local_field_group')):

    /*
     * Регистрация полей для страницы Настройки
     */

    acf_add_local_field_group(array(
        'key' => 'group_theme_general_settings',
        'title' => 'Основные данные',
        'fields' => array(
            array(
                'key' => 'field_address',
                'name' => 'address',
                'label' => 'Адрес',
                'type' => 'text',
            ),
            array(
                'key' => 'field_email',
                'name' => 'email',
                'label' => 'E-mail',
                'type' => 'text',
            ),
            array(
                'key' => 'field_copyright',
                'name' => 'copyright',
                'label' => 'Копирайт',
                'type' => 'text',
            ),
            array(
                'key' => 'field_logotype',
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
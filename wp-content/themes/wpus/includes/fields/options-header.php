<?php


/**
 * Регистрация страницы Настройки - Шапка
 */

if (function_exists('acf_add_options_page')):

    acf_add_options_sub_page(array(
        'page_title' => 'Настройки верхней части сайта',
        'menu_title' => 'Шапка',
        'menu_slug' => 'theme_general_settings_header',
        'parent_slug' => 'theme_general_settings',
    ));

endif;

if (function_exists('acf_add_local_field_group')):

    /**
     * Регистрация ACF для страницы Настройки - Шапка
     */

    acf_add_local_field_group(array(
        'key' => 'theme_general_settings_header_fields',
        'title' => 'Основные данные',
        'fields' => array(
            array(
                'key' => 'header_address',
                'name' => 'header_address',
                'label' => 'Адрес',
                'type' => 'text',
            ),
            array(
                'key' => 'header_email',
                'name' => 'header_email',
                'label' => 'E-mail',
                'type' => 'text',
            ),
            array(
                'key' => 'header_copyright',
                'name' => 'header_copyright',
                'label' => 'Копирайт',
                'type' => 'text',
            ),
            array(
                'key' => 'header_logotype',
                'name' => 'header_logotype',
                'label' => 'Логотип',
                'type' => 'image',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme_general_settings_header',
                ),
            ),
        ),
    ));

endif;
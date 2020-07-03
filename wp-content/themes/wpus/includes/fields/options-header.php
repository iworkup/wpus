<?php

/*
 * Регистрация дочерней страницы настроек
 */

if (function_exists('acf_add_options_page')):

    acf_add_options_sub_page(array(
        'page_title' => 'Дочерняя страница настроек',
        'menu_title' => 'Дочерка',
        'menu_slug' => 'theme_general_settings_subpage',
        'parent_slug' => 'theme_general_settings',
    ));

endif;

if (function_exists('acf_add_local_field_group')):

    /*
     * Регистрация полей для дочерней страницы настроек
     */

    acf_add_local_field_group(array(
        'key' => 'group_theme_general_settings_subpage',
        'title' => 'Основные данные',
        'fields' => array(
            array(
                'key' => 'field_subpage_address',
                'name' => 'subpage_address',
                'label' => 'Дополнительный адрес',
                'type' => 'text',
            ),
            array(
                'key' => 'field_subpage_email',
                'name' => 'subpage_email',
                'label' => 'Дополнительный E-mail',
                'type' => 'text',
            ),
            array(
                'key' => 'field_subpage_copyright',
                'name' => 'subpage_copyright',
                'label' => 'Дополнительный Копирайт',
                'type' => 'text',
            ),
            array(
                'key' => 'field_subpage_logotype',
                'name' => 'subpage_logotype',
                'label' => 'Дополнительный Логотип',
                'type' => 'image',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme_general_settings_subpage',
                ),
            ),
        ),
    ));

endif;
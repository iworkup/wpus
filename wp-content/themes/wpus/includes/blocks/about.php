<?php

/**
 * Регистрация блока
 */

if (function_exists('acf_register_block_type')) {

    add_action('acf/init', function () {

        acf_register_block_type(array(
            'name' => 'about',
            'title' => 'О компании',
            'render_template' => 'includes/blocks/about.php',
            'category' => 'home-category',
            'icon' => '',
            'mode' => 'edit',
        ));

    });

}

/**
 * Регистрация полей для блока
 */

if (function_exists('acf_add_local_field_group')) {

    acf_add_local_field_group(array(
        'key' => 'about_block',
        'fields' => array(),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/about',
                ),
            ),
        ),
    ));

    acf_add_local_field(array(
        'key' => 'about_title',
        'name' => 'about_title',
        'label' => 'Название компании',
        'type' => 'text',
        'parent' => 'about_block'
    ));

    acf_add_local_field(array(
        'key' => 'about_sub_title',
        'name' => 'about_sub_title',
        'label' => 'Краткое описание компании',
        'type' => 'text',
        'parent' => 'about_block'
    ));

    acf_add_local_field(array(
        'key' => 'about_description',
        'name' => 'about_description',
        'label' => 'Полное описание',
        'type' => 'textarea',
        'parent' => 'about_block'
    ));

    acf_add_local_field(array(
        'key' => 'about_vacancy',
        'name' => 'about_vacancy',
        'label' => 'Сообщение о вакансии',
        'type' => 'wysiwyg',
        'parent' => 'about_block'
    ));

    acf_add_local_field(array(
        'key' => 'about_button_title',
        'name' => 'about_button_title',
        'label' => 'Название кнопки',
        'type' => 'text',
        'parent' => 'about_block'
    ));

    acf_add_local_field(array(
        'key' => 'about_button_url',
        'name' => 'about_button_url',
        'label' => 'Ссылка кнопки',
        'type' => 'url',
        'parent' => 'about_block'
    ));

}



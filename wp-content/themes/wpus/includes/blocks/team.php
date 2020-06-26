<?php

/**
 * Регистрация блока
 */

if (function_exists('acf_register_block_type')) {

    add_action('acf/init', function () {

        acf_register_block_type(array(
            'name' => 'team_test_block',
            'title' => 'Команда',
            'render_template' => 'includes/blocks/team-display.php',
            'category' => 'faq-category',
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
        'key' => 'team_test_group',
        'fields' => array(
            array(
                'key' => 'team_test_zagolovok_position',
                'name' => 'team_test_zagolovok_position',
                'label' => 'Заголовок',
                'type' => 'text',
            ),
            array(
                'key' => 'team_test_podzagolovok_position',
                'name' => 'team_test_podzagolovok_position',
                'label' => 'Подаголовок',
                'type' => 'text',
            ),
            array(
                'key' => 'team_test_repeater',
                'name' => 'team_test_repeater',
                'label' => 'Команда',
                'type' => 'repeater',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'team_test_name',
                        'name' => 'team_test_name',
                        'label' => 'Имя',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'team_test_position',
                        'name' => 'team_test_position',
                        'label' => 'Должность',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'team_test_description',
                        'name' => 'team_test_description',
                        'label' => 'Описание',
                        'type' => 'textarea',
                    ),
                    array(
                        'key' => 'team_test_description_full',
                        'name' => 'team_test_description_full',
                        'label' => 'Полное описание',
                        'type' => 'wysiwyg',
                    ),
                    array(
                        'key' => 'team_test_image',
                        'name' => 'team_test_image',
                        'label' => 'Фотография',
                        'type' => 'image',
                    ),
                ),
            ),

        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/team_test_block',
                ),
            ),
        ),
    ));

}


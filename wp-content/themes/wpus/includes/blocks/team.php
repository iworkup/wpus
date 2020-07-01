<?php

/*
 * Регистрация блока
 */

if (function_exists('acf_register_block_type')) {

    add_action('acf/init', function () {

        acf_register_block_type(array(
            'name' => 'team-test-block-2347850', // нельзя использовать нижние подчёркивания
            'title' => 'Команда 1234124',
            'render_template' => 'includes/blocks/team-display.php',
            'category' => 'faq-category',
            'icon' => '',
            'mode' => 'edit',
        ));

    });

}

/*
 * Регистрация полей для блока
 */

if (function_exists('acf_add_local_field_group')) {

    acf_add_local_field_group(array(
        'key' => 'group_team_test_group',
        'title' => 'Тестовая команда',
        'fields' => array(
            array(
                'key' => 'field_team_test_zagolovok_position_2347850',
                'name' => 'field_team_test_zagolovok_position_2347850',
                'label' => 'Заголовок',
                'type' => 'text',
            ),
            array(
                'key' => 'field_team_test_podzagolovok_position_2347850',
                'name' => 'field_team_test_podzagolovok_position_2347850',
                'label' => 'Подаголовок',
                'type' => 'text',
            ),
            array(
                'key' => 'field_team_test_repeater_2347850',
                'name' => 'field_team_test_repeater_2347850',
                'label' => 'Команда',
                'type' => 'repeater',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_team_test_name_2347850',
                        'name' => 'field_team_test_name_2347850',
                        'label' => 'Имя',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_team_test_position_2347850',
                        'name' => 'field_team_test_position_2347850',
                        'label' => 'Должность',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_team_test_description_2347850',
                        'name' => 'field_team_test_description_2347850',
                        'label' => 'Описание',
                        'type' => 'textarea',
                    ),
                    array(
                        'key' => 'field_team_test_description_full_2347850',
                        'name' => 'field_team_test_description_full_2347850',
                        'label' => 'Полное описание',
                        'type' => 'wysiwyg',
                    ),
                    array(
                        'key' => 'field_team_test_image_2347850',
                        'name' => 'field_team_test_image_2347850',
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
                    'value' => 'acf/team-test-block-2347850',
                ),
            ),
        ),
    ));

}


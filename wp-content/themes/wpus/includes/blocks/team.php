<?php

/*
 * Регистрация блока
 */

if (function_exists('acf_register_block_type')) {

    add_action('acf/init', function () {

        acf_register_block_type(array(
            'name' => 'team-block', // нельзя использовать нижние подчёркивания
            'title' => 'Команда',
            'render_template' => 'includes/blocks/team-display.php',
//            'render_template' => render(),
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
        'key' => 'group_team', // обязательно использовать приставку group_
        'title' => 'Команда',
        'fields' => array(
            array(
                'key' => 'field_team_title', // обязательно использовать приставку field_
                'label' => 'Заголовок', // значение не должно совпадать со значением ключа key
                'name' => 'Заголовок', // значение не должно совпадать со значением ключа key
                'type' => 'text',
            ),
            array(
                'key' => 'field_team_subtitle',
                'label' => 'Подаголовок',
                'name' => 'Подаголовок',
                'type' => 'text',
            ),
            array(
                'key' => 'field_team_items',
                'label' => 'Команда',
                'name' => 'Команда',
                'type' => 'repeater',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_team_name',
                        'label' => 'Имя',
                        'name' => 'Имя',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_team_publish',
                        'label' => 'Показывать?',
                        'name' => 'Показывать?',
                        'type' => 'radio',
                        'choices' => array(
                            'no' => 'Нет',
                            'yes' => 'Да',
                        ),
                    ),
                    array(
                        'key' => 'field_team_publish_no',
                        'label' => 'Нет',
                        'name' => 'Нет',
                        'type' => 'text',
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_team_publish',
                                    'operator' => '==',
                                    'value' => 'no',
                                ),
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_team_publish_yes',
                        'label' => 'Да',
                        'name' => 'Да',
                        'type' => 'text',
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_team_publish',
                                    'operator' => '==',
                                    'value' => 'yes',
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/team-block',
                ),
            ),
        ),
    ));

}

function render()
{

    return <<<EOT

{var_dump(get_field('field_team_title'))}

EOT;


}
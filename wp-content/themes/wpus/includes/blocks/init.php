<?php
if (function_exists('acf_register_block_type')) {

    add_action('acf/init', 'wpus_register_acf_block_types');

}

function wpus_register_acf_block_types()
{

    acf_register_block_type(array(
        'name' => 'about',
        'title' => __('О компании'),
        'render_template' => 'about.php',
        'category' => 'formatting',
        'icon' => 'admin-comments',
        'mode' => 'edit',
    ));

    acf_register_block_type(array(
        'name' => 'team',
        'title' => __('Команда'),
        'render_template' => 'team.php',
        'category' => 'formatting',
        'icon' => 'admin-comments',
        'mode' => 'edit',
    ));

    acf_register_block_type(array(
        'name' => 'quotes',
        'title' => __('Цитаты'),
        'render_template' => 'quote.php',
        'category' => 'formatting',
        'icon' => 'admin-comments',
        'mode' => 'edit',
    ));

    acf_register_block_type(array(
        'name' => 'vacancies',
        'title' => __('Вакансии'),
        'render_template' => 'vacancy.php',
        'category' => 'formatting',
        'icon' => 'admin-comments',
        'mode' => 'edit',
    ));

}
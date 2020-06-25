<?php

if (function_exists('acf_register_block_type')) {

    add_action('acf/init', 'wpus_register_acf_block_types');

}

function wpus_register_acf_block_types()
{

    acf_register_block_type(array(
        'name' => 'team',
        'title' => __('Команда'),
        'render_template' => 'team.php',
        'category' => 'faq-category',
        'icon' => '',
        'mode' => 'edit',
    ));

    acf_register_block_type(array(
        'name' => 'quotes',
        'title' => __('Цитаты'),
        'render_template' => 'quote.php',
        'category' => 'links-category',
        'icon' => '',
        'mode' => 'edit',
    ));

    acf_register_block_type(array(
        'name' => 'vacancies',
        'title' => __('Вакансии'),
        'render_template' => 'vacancy.php',
        'category' => 'news-category',
        'icon' => '',
        'mode' => 'edit',
    ));

}

require_once get_template_directory() . '/includes/blocks/about.php';
require_once get_template_directory() . '/includes/blocks/quote.php';
require_once get_template_directory() . '/includes/blocks/team.php';
require_once get_template_directory() . '/includes/blocks/vacancy.php';
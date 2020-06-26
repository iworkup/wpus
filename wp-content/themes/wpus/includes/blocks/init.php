<?php
if (function_exists('acf_register_block_type')) {

    add_action('acf/init', function () {

        acf_register_block_type(array(
            'name' => 'testing_test_block',
            'title' => 'Тестовый блок',
            'render_template' => 'includes/blocks/testing_test.php',
            'category' => 'faq-category',
            'icon' => '',
            'mode' => 'edit',
        ));

    });

}

require_once get_template_directory() . '/includes/blocks/about.php';
require_once get_template_directory() . '/includes/blocks/quote.php';
require_once get_template_directory() . '/includes/blocks/team.php';
require_once get_template_directory() . '/includes/blocks/vacancy.php';
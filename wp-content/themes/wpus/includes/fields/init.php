<?php

/**
 * Поля ACF
 */

if (function_exists('acf_add_local_field_group')):

    /**
     * Поля ACF для записей типа page
     */

    acf_add_local_field_group(array(
        'key' => 'group_1',
        'title' => 'Title group',
        'fields' => array(
            array(
                'key' => 'field_1',
                'label' => 'Title field',
                'name' => 'sub_title',
                'type' => 'text',
            )
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),
            ),
        ),
    ));

endif;

require_once get_template_directory() . '/includes/fields/options.php';
require_once get_template_directory() . '/includes/fields/options-header.php';
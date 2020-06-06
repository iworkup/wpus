<?php
if ( function_exists( 'acf_add_local_field_group' ) ):

    /**
     * Цитаты - Эксперты
     */

    acf_add_local_field_group( array(
        'key'      => 'quotes_block',
        'fields'   => array(),
        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/quotes',
                ),
            ),
        ),
    ) );

    acf_add_local_field( array(
        'key'    => 'quotes',
        'name'   => 'quotes',
        'label'  => 'Цитаты',
        'type'   => 'repeater',
        'layout' => 'block',
        'parent' => 'quotes_block'
    ) );

    acf_add_local_field( array(
        'key'    => 'quote_author',
        'name'   => 'quote_author',
        'label'  => 'Имя',
        'type'   => 'text',
        'parent' => 'quotes'
    ) );

    acf_add_local_field( array(
        'key'    => 'quote_company',
        'name'   => 'quote_company',
        'label'  => 'Компания',
        'type'   => 'text',
        'parent' => 'quotes'
    ) );

    acf_add_local_field( array(
        'key'    => 'quote_position',
        'name'   => 'quote_position',
        'label'  => 'Должность',
        'type'   => 'text',
        'parent' => 'quotes'
    ) );

    acf_add_local_field( array(
        'key'    => 'quote_link',
        'name'   => 'quote_link',
        'label'  => 'Ссылка',
        'type'   => 'url',
        'parent' => 'quotes'
    ) );

    acf_add_local_field( array(
        'key'    => 'quote_description',
        'name'   => 'quote_description',
        'label'  => 'Цитата',
        'type'   => 'textarea',
        'parent' => 'quotes'
    ) );

    acf_add_local_field( array(
        'key'    => 'quote_image',
        'name'   => 'quote_image',
        'label'  => 'Фотография',
        'type'   => 'image',
        'parent' => 'quotes'
    ) );

endif;
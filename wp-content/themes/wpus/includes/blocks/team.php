<?php
if ( function_exists( 'acf_add_local_field_group' ) ):

    /**
     * Команда
     */

    acf_add_local_field_group( array(
        'key'      => 'team_block',
        'fields'   => array(),
        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/team',
                ),
            ),
        ),
    ) );

    acf_add_local_field( array(
        'key'    => 'team',
        'name'   => 'team',
        'label'  => 'Команда',
        'type'   => 'repeater',
        'layout' => 'block',
        'parent' => 'team_block'
    ) );

    acf_add_local_field( array(
        'key'    => 'team_name',
        'name'   => 'team_name',
        'label'  => 'Имя',
        'type'   => 'text',
        'parent' => 'team'
    ) );

    acf_add_local_field( array(
        'key'    => 'team_position',
        'name'   => 'team_position',
        'label'  => 'Должность',
        'type'   => 'text',
        'parent' => 'team'
    ) );

    acf_add_local_field( array(
        'key'    => 'team_description',
        'name'   => 'team_description',
        'label'  => 'Описание',
        'type'   => 'textarea',
        'parent' => 'team'
    ) );

    acf_add_local_field( array(
        'key'    => 'team_description_full',
        'name'   => 'team_description_full',
        'label'  => 'Полное описание',
        'type'   => 'wysiwyg',
        'parent' => 'team'
    ) );

    acf_add_local_field( array(
        'key'    => 'team_image',
        'name'   => 'team_image',
        'label'  => 'Фотография',
        'type'   => 'image',
        'parent' => 'team'
    ) );

endif;
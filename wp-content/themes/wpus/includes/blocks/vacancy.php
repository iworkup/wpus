<?php
if ( function_exists( 'acf_add_local_field_group' ) ):

    /**
     * Вакансии
     */

    acf_add_local_field_group( array(
        'key'      => 'vacancies_block',
        'fields'   => array(),
        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/vacancies',
                ),
            ),
        ),
    ) );

    acf_add_local_field( array(
        'key'    => 'vacancies',
        'name'   => 'vacancies',
        'label'  => 'Вакансии',
        'type'   => 'repeater',
        'layout' => 'block',
        'parent' => 'vacancies_block'
    ) );

    acf_add_local_field( array(
        'key'    => 'vacancy_name',
        'name'   => 'vacancy_name',
        'label'  => 'Должность',
        'type'   => 'text',
        'parent' => 'vacancies'
    ) );

    acf_add_local_field( array(
        'key'    => 'vacancy_description',
        'name'   => 'vacancy_description',
        'label'  => 'Описание',
        'type'   => 'wysiwyg',
        'parent' => 'vacancies'
    ) );

endif;
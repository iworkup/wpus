<?php

acf_add_local_field_group(array(
    'key' => 'book_author_image_group',
    'title' => 'Фотография автора',
    'fields' => array(
        array(
            'key' => 'book_author_image',
            'label' => 'Фотография автора',
            'name' => 'book_author_image',
            'type' => 'image',
        )
    ),
    'location' => array(
        array(
            array(
                'param' => 'taxonomy',
                'operator' => '==',
                'value' => 'book_authors',
            ),
        ),
    ),
));
<?php

add_action('init', 'wpus_register_taxonomies');

function wpus_register_taxonomies()
{

    require_once get_template_directory() . '/includes/taxonomies/book-authors.php';

}
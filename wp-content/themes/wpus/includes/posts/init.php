<?php

add_action('init', 'register_post_types');
function register_post_types()
{

    require_once get_template_directory() . '/includes/posts/books.php';

}
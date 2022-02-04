<?php

define('MY_ACF_PATH', get_stylesheet_directory() . '/includes/vendors/acf/');
define('MY_ACF_URL', get_stylesheet_directory_uri() . '/includes/vendors/acf/');

include_once(MY_ACF_PATH . 'acf.php');

add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url($url)
{
    return MY_ACF_URL;
}

add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
function my_acf_settings_show_admin($show_admin)
{
    return true;
}



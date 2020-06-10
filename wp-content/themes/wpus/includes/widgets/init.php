<?php

add_action('widgets_init', 'wpus_register_sidebars');

function wpus_register_sidebars()
{
    register_sidebar(array(
        'name' => 'WPUS Sidebar',
        'id' => "wpus_sidebar",
    ));
}

add_action('widgets_init', 'wpus_register_widgets');

function wpus_register_widgets() {

    require_once get_template_directory() . '/includes/widgets/covid.php';

}

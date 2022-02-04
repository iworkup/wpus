<?php

/*
 * Подключение полей ACF
 */

if (function_exists('acf_add_local_field_group')):

    require_once get_template_directory() . '/includes/fields/book-author-image.php';

endif;

/*
 * Подключение страниц настроек ACF
 */

require_once get_template_directory() . '/includes/fields/options.php';
require_once get_template_directory() . '/includes/fields/options-header.php';
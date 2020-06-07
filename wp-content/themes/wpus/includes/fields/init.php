<?php

/**
 * Поля ACF
 */

if (function_exists('acf_add_local_field_group')):

    require_once get_template_directory() . '/includes/fields/book-author-image.php';

endif;

/**
 * Регистрация страниц настроек ACF и полей для них
 */

require_once get_template_directory() . '/includes/fields/options.php';
require_once get_template_directory() . '/includes/fields/options-header.php';
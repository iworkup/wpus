<?php get_header() ?>

<?php echo 'index.php<br>' ?>
<? //= get_option('page_for_posts') ?>


<?php echo '<br>' ?>
<?php

if (is_home()) {

    /**
     * Если обращение к главной странице, где выводятся последние посты
     */

    require_once 'includes/pages/posts.php';

} elseif (is_singular() and is_front_page()) {

    /**
     * Если обращение к странице, которая установлена главной в настройках
     */

    require_once 'includes/pages/home.php';

}elseif (is_singular('post')) {

    /**
     * Если обращение к одной записе типа posts
     */

    require_once 'includes/pages/post.php';

}
elseif (is_singular('page')) {

    /**
     * Если обращение к одной записе типа posts
     */

    require_once 'includes/pages/page.php';

}

if ( function_exists('dynamic_sidebar') ) {
    dynamic_sidebar('wpus_sidebar');
}


/**
 * Если обращение к одной записе (запись, кастомная запись, страница, вложение)
 */
?>
<?php get_footer() ?>

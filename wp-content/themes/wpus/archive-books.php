<?php get_header(); ?>

<p>archive-books</p>

<?php

$query_args = array(
    'post_type' => 'books',
    'post_status' => 'publish',
    'posts_per_page' => 5,
    'order' => 'DESC',
    'orderby' => 'date',
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1
);

$news = new WP_Query($query_args);

$total_pages_news = $news->max_num_pages;

?>


<?php while ($news->have_posts()) : ?>

    <?php $news->the_post(); ?>

    <?php echo the_time('d.m.Y'); ?>
    <?php echo the_title(); ?>
    <?php echo get_the_content(); ?>
    <?php echo get_the_post_thumbnail_url(); ?>
    <?php echo get_field('media_link'); ?>

<?php endwhile; ?>

<?php wp_reset_postdata(); ?>


    /* Пагинация */

<?php

$total_pages = $total_pages_news;

if ($total_pages > 1) :

    /*
     * если постов больше, чем на одну страницу
     */

    $current_page = max(1, get_query_var('paged'));

    $paginate_args = array(
        'base' => get_pagenum_link(1) . '%_%',
        'format' => '/page/%#%',
        'current' => $current_page,
        'total' => $total_pages,
        'type' => 'plain',
        'prev_next' => false,
        //'prev_text' => __('« Назад'),
        //'next_text' => __('Вперёд »'),
    );

    $links = paginate_links($paginate_args);

    ?>

    <?php echo $links; ?>

<?php endif; ?>

<?php get_footer(); ?>
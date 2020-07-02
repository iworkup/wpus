<?php echo 'home page<br>' ?>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
} else {
    echo '<p>Контента нет</p>';
}
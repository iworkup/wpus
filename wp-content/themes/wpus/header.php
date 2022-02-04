<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body>
<?php wp_body_open(); ?>
<?php echo 'header.php<br>' ?>
<?php
wp_nav_menu(array(
    'theme_location' => 'menu-header',
    'container' => '', // Удаляем контейнер оборачивающий меню
    'items_wrap' => '%3$s', // Удаляем <ul> первого уровня
    'walker' => new Header_Walker_Nav_Menu(),
));
?>


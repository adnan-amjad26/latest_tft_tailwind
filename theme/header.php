<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Funded_Trader
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
	<style>
		@font-face {
			font-family: "Wadik";
			src:
				local("Wadik Bold"),
				local("Wadik-Bold"),
				url("<?php echo get_template_directory_uri(); ?>/fonts/WadikBold.woff2") format("woff2"),
				url("<?php echo get_template_directory_uri(); ?>/fonts/WadikBold.woff") format("woff");
			font-weight: 700;
			font-style: normal;
			font-display: swap;
		}
	</style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page" class="overflow-hidden">
	<a href="#content" class="sr-only"><?php esc_html_e( 'Skip to content', 'the-funded-trader' ); ?></a>

	<?php get_template_part( 'template-parts/layout/header', 'content' ); ?>

	<div id="content">

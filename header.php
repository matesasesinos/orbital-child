<?php
/**
 * The header
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Orbital
 * @since 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<a class="screen-reader-text" href="#content"><?php _e('Skip to content', 'orbital'); ?></a>

	<?php get_template_part('template-parts/header/header', 'image'); ?>

	<?php get_template_part('template-parts/navbar/navbar', 'top'); ?>

	<?php
	if (orbital_customize_option('orbital_layout_search_navbar')) {
		get_template_part('template-parts/search/content-search', 'navbar');
	}
	if(!is_front_page()){
		?>
		<div class="migas"><?php 	if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs();?></div>
	<?php } ?>
	
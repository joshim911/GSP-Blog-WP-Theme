<?php  


if( ! defined('ABSPATH') ) : die("Access denied"); endif;


?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<title></title>
</head>
<body id="main_body">
	<header class="mb-3 bg-dark">
		<?php  get_template_part( 'template-parts/header' ); ?>
	</header>
	 <?php get_template_part( '/template-parts/search' ); ?>
	 <?php get_template_part( '/template-parts/sidebar', 'menu' ); ?>
<section id="main_content">
	

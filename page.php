<?php 


if( ! defined('ABSPATH') ) : die("Access denied"); endif;

	get_header();

?><div class="container">
	<div class="row">
		<div class="col-12 col-md-12 col-lg-8">
			<section class="content"><?php get_template_part( 'template-parts/content', 'single'); ?></section>
		</div>
		<div class="col-12 col-md-12 col-lg-4">
			<section class="content-sidebar"><?php get_template_part( 'template-parts/content','sidebar' ); ?></section>
		</div>
	</div>
</div>


<?php  get_footer();

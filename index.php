<?php 


if( ! defined('ABSPATH') ) : die("Access denied"); endif;

	get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-12 col-md-12 col-lg-8">
			<?php  get_template_part( 'template-parts/content', 'home');  ?>		
		</div>
		<div class="col-12 col-md-12 col-lg-4 mt-4">
			<?php  get_template_part( 'template-parts/content','sidebar' );  ?>
		</div>
	</div>
</div>
<?php   get_footer();

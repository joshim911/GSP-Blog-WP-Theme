<?php


if( ! defined('ABSPATH') ) : die("Access denied"); endif;

	if ( post_password_required( ) ) {
		return;
	} ?>  	
    <section id="comments" class="c-comments">
    	<?php 
    		if (have_comments()) { ?>
    		<h2 class="c-comments_title">
    			<?php 
    				printf(
    					esc_html( _n( '%1$s Reply to "%2$s"', '%1$s Replies to "%2$s"', get_comments_number(), wi_name ) ),
    					number_format_i18n( get_comments_number(), get_the_title() ), get_the_title()
    				)
    
    				 ?>
    		</h2>
    		<ul class="c-comments__list">
    			<?php  
    				wp_list_comments( array(
    					'avatar_size' => 0,
    					'reply_text' => 'Hello',
    					'callback' => 'wi_comment_callback'
    					)
    				 );
    			?>
    		</ul>
    		<?php the_comments_pagination(); ?>
    	<?php	} ?>
    	<?php 
    		if ( ! comments_open() && get_comments_number() ) { ?>
    			<p class="c-comments__closed"><?php esc_html_e( 'Comments are closed for this post', wi_name ); ?></p>
    	<?php	} ?>
    	 <?php comment_form(); ?>
    </section>
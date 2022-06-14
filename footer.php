<?php  
/**
 * Mian Footer 
 */
	
if( ! defined('ABSPATH') ) : die("Access denied"); endif;



 get_template_part( '/template-parts/widget', 'footer' ); ?>
</section> <!-- close main content -->
 <footer id="site-footer" class="header-footer-group">

				<div class="section-inner">

					<div class="footer-credits">

						<p class="footer-copyright">
							<span class="copyright-date">&copy;<?php
							echo date_i18n(
								/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
								_x( 'Y', 'copyright date format', wi_name )
							);
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						</p><!-- .footer-copyright -->
						
						<?php
						if ( function_exists( 'the_privacy_policy_link' ) ) {
						    ?></span><span class="text-white">&nbsp;||&nbsp;</span>
						<?php	the_privacy_policy_link( '<p class="privacy-policy">', '</p>' );
						}
						?>
						</span><span class="text-white">&nbsp;||&nbsp;</span>
						<p class="powered-by-wordpress">
							<a href="<?php echo esc_url( __( bloginfo('url'), wi_name ) ); ?>">
								<?php _e( 'Powered by', wi_name );?><span>&nbsp;</span><?php _e( bloginfo('name'), wi_name ); ?>
							</a>
						</p><!-- .powered-by-written info -->

					</div><!-- .footer-credits -->

				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->
<?php wp_footer(); ?>
</body>
</html>

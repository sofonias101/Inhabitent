<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				
				<div class="footer-banner" style="<?php echo "background-image: url(" .get_template_directory_uri() . '/images/dark-wood@2x.png)'; ?>">

					<div class="footer-blocks-container">
					
							<div class="widget-footer-area">
                  <?php dynamic_sidebar( 'footer' ); ?>
									
								<section class="footer-logo" style="<?php echo "background-image: url(" .get_template_directory_uri() . '/images/logos/inhabitent-logo-text.svg)'; ?>">
									
								</section>
							</div>
							
							<div  class="copyright-container" >
							<p class="copyright" >COPYRIGHT © 2020 INHABITENT</p>
						 </div>

          </div><!-- .footer-container -->
				</div><!--.footer-banner  -->
			</footer><!-- .site-footer -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>

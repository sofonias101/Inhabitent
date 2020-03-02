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
							</div>
      
						  <!-- <div class="site-info">
					    <p>COPYRIGHT © 2019 INHABITENT </p>
				      </div>.site-info -->

          </div><!-- .footer-container -->
				</div><!--.footer-banner  -->
			</footer><!-- .site-footer -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>

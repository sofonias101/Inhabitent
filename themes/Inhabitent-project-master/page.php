<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>
 <div class="big-container" >
	 <div id="primary" class="content-area">
		 <main id="main" class="site-main" role="main">

			 <?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page', 'findus' ); ?>

			 <?php endwhile; // End of the loop. ?>

		 </main><!-- #main -->

  	</div><!-- #primary -->

		<?php get_sidebar(); ?>
		
	</div><!-- big-container -->

	<?php get_footer(); ?>

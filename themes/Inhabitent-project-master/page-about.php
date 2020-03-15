<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header();?>

	<div id="primary" class="content-area">
		<div class="about-hero">
			<div class="about-hero-img"><?php the_post_thumbnail(); ?></div>
			<?php the_title( '<h1 class="about-title">', '</h1>' ); ?>
		</div>
		<main id="main" class="site-main" role="main">
			
			<?php while ( have_posts() ) : the_post(); ?>
			
			<?php get_template_part( 'template-parts/content', 'about' ); ?>
			
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

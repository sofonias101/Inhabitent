<?php
/**
 * The template for displaying the font page.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<h2>My Custom Front Page</h2>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	  	<?php
	        $args = array( 'posts_per_page' => 3,

                         'post_type' => 'post' );
	  
   $journal_posts = get_posts( $args ); // returns an array of posts
?>

<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>

   <?php get_template_part ('template-parts/content'); ?>

	 
	 
<?php endforeach; wp_reset_postdata(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

<?php
/**
 * Template part for displaying single posts.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
		
		<div class="product-info" >
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
		
		<div class="product-image" >
		 <img src="<?php echo get_the_post_thumbnail_url() . ')'?>" />		
		</div>
		 <div class="entry-meta">
			 <?php Inhabitent_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php Inhabitent_starter_posted_by(); ?>
			</div><!-- .entry-meta -->
			
	</header><!-- .entry-header -->

	<div class="entry-content">
 		<?php the_content(); ?>
 		  <?php
 			 wp_link_pages( array(
 				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
 				'after'  => '</div>',
 		  	) );
		  ?>
	</div><!-- .entry-content -->
	
	<footer class="entry-footer">
		<?php Inhabitent_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

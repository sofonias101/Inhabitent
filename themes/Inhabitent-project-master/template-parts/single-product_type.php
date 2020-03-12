<?php
/**
 * Template part for displaying single posts.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="product-image" >
			<img src="<?php echo the_field('image'); ?>" />
		</div>
		
		
		
		
	</header><!-- .entry-header -->

	<div class="product-info" >
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	
	<h1>$<?php the_field('price'); ?></h1>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>

		
	</div><!-- .entry-content -->
	</div>
	<footer class="entry-footer">
		<?php Inhabitent_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

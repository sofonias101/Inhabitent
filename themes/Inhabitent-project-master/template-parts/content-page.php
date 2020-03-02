<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<div class="map-con">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10414.754406019307!2d-123.1381278!3d49.2633479!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7edde857c28340ba!2sRED%20Academy%20Vancouver!5e0!3m2!1sen!2sca!4v1583005916629!5m2!1sen!2sca" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	</div>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

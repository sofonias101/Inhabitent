<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Inhabitent_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function Inhabitent_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	if ( is_singular( 'page' ) ) {
		global $post;
		$classes[] = 'page-' . $post->post_name;
	}

	// if ( is_page( 'about' ) ) {
	// 	global $post;
	// 	$classes[] = 'page-about';
	// }

	return $classes;
}
add_filter( 'body_class', 'Inhabitent_starter_body_classes' );


// Change the logo from logging page
function inhabitent_starter_set_logo(){
	echo '
	<style>
	.login h1 a{
			background-image: url(' . get_template_directory_uri() . '/logos/inhabitent-logo-text-dark.svg);
			background-position: center; height:80px; background:;
	}
	</style>';
}
add_action('login_header', 'inhabitent_starter_set_logo');

// Add widgets in the footer area
function inhabitent_start_footer_widgets() {
	// Widget code goes here...
	register_sidebar( array(
			'name'          => 'Footer',
			'id'            => 'footer',
			'description'   => 'Widgets for the footer',
			'before_widget' => '<section class="footer-area footer-area-one">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
	));
}
add_action( 'widgets_init', 'inhabitent_start_footer_widgets' );
<?php
/**
 * The header for our theme.
 *
 * @package Inhabitent_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">

				<div class="container">

			    <div class="site-branding">
						
						<a href= <?php echo esc_url( home_url( '/' ) ); ?>><div  class="logo"  style="<?php echo "background-image: url(" . get_template_directory_uri() . '/images/logos/inhabitent-logo-tent.svg)'; ?>">
						</div></a>
						
				  </div><!-- .site-branding -->
				

				  <nav id="site-navigation" class="main-navigation" role="navigation">
					 <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html(  'Primary Menu' ); ?></button>

					 <div class="nav-div">	
						 <?php  wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						

							<?php get_search_form(); ?>
						</div>

				  </nav><!-- #site-navigation -->

				</div><!-- #container -->
				
			</header><!-- #masthead -->
    </div>

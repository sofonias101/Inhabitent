<?php
/**
 * The template for displaying the font page.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
	  <main id="main" class="site-main" role="main">

		  <div class="frontpage-banner">

       <img class="banner" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">				
			
			
			 <img  class="banner-logo"src="wp-content/themes/Inhabitent-project-master/images/logos/inhabitent-logo-full.svg" alt="">
		  </div>
			
	    <div class="main-content" >
				
				<div class="shop-list">
				 <?php 
					 $taxonomies = get_terms( 'product_taxonomy', array(
							 'hide_empty' => true,
					) ); ?>
					 <?php if ( $taxonomies ) : ?>
							<div class="products-taxonomies-front">
	 
							 <?php foreach ( $taxonomies  as $taxonomy ) : ?>
									 <a href="<?php echo get_term_link($taxonomy); ?>">
									 <img class='front-page-taxonomies-icons' src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $taxonomy->slug . '.svg'?>" alt="<?php echo $taxonomy->slug ?>"> 
									<p> 
										 <?php echo $taxonomy->description; ?>
									</p>
									<button> <h3> <?php echo $taxonomy->name . ' stuff' ?> </h3> </button>
									</a>
									<?php endforeach; ?>
							</div>
									<?php endif;?>
	 
				</div><!-- shop-list -->
				<div class="post-list" >
					
					
					<?php
	             $args = array( 'posts_per_page' => 3,
							 
							 'post_type' => 'post' );
							 
							 $journal_posts = get_posts( $args ); // returns an array of posts
							 ?>
							 <?php echo get_the_title('SHOP');?>
     
     
     
		 <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>

			

	     	    <?php get_template_part ('template-parts/content','front-page'); ?>
	     	 
	     	    <?php endforeach; wp_reset_postdata(); ?>
     
     
				</div><!-- post-list -->

	
	

      </div><!-- main-coontent -->
	  </main><!-- #main -->
  </div><!-- #primary -->

<a class="link-button" href="<?php the_permalink (); ?>">READ MORE</a>
<?php get_footer(); ?>

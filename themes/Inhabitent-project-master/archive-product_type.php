<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
			</header><!-- .page-header -->
			
				<div class="shopstuff" >
				  <?php 
					  get_the_archive_title( );
					?>
				</div> 
			    <?php
            $taxonomies = get_terms( 'product_taxonomy', array(
                'hide_empty' => true,
            ) ); ?>
            <?php if ( $taxonomies ) : ?>
                <ul class="products-taxonomies-list">
                <?php foreach ( $taxonomies  as $taxonomy ) : ?>
                    <li><a href="<?php echo get_term_link($taxonomy); ?>"><?php echo $taxonomy->name ?></a></li>
                <?php endforeach; ?>
								</ul>
								<?php endif;?>
					 
				
				
		   <div class="products">
			    <?php /* Start the Loop */ ?>
						
			       <?php while ( have_posts() ) : the_post(); ?>
			
				    <div class="product-items" >
				    	<div class="product-thumbnail" >
				    		<a href="#" rel="">
				            <?php if( get_field('image') ): ?>
				            	<img class="item-image" src="<?php the_field('image'); ?>" />
										<?php endif; ?>
								</a>
							</div><!-- product-thumbnail -->	

								<div class="info-container">

											<p class="item-title"> <?php the_title(); ?> </p>
											
											<?php if( get_field('price') ): ?>
				            	 <p class="item-price"> <?php the_field('price'); ?></p>
											<?php endif; ?>

								</div>	
  
			      </div><!-- product-items -->
			 
			    <?php endwhile; ?>
			  </div><!--products -->
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

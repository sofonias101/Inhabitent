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

  <div class="shopstuff" >
				  <?php 
					  get_the_archive_title( );
					?>
				</div> 
			    <?php
            $products = get_terms( 'product info', array(
                'hide_empty' => true,
            ) ); ?>
            <?php if ( $products ) : ?>
                <ul class="products-list">
                <?php foreach ( $products  as $products) : ?>
                  <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	
                   <h1>$<?php the_field('price'); ?></h1>
                   

                <?php endforeach; ?>
								</ul>
								<?php endif;?>
		
	</div><!-- .entry-content -->
	</div>
	<footer class="entry-footer">
		<?php Inhabitent_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

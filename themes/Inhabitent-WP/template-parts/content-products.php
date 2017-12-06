<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="product-grid-item">
				<div class="thumbnail-wrapper">
					<a href="<?php bloginfo('template_url'); ?><?php the_permalink() ?>"><?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?></a>
					</div>
					<div class="product-info">
						<?php echo CFS()->get( 'price' ); ?>
					</div>
				<?php endif; ?>
			</div>


	</article><!-- #post-## -->

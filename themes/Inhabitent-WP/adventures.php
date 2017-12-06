<?php
 /*
 Template Name: Adventures Template
 */
?><?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<h1 class="latest-adventures">Latest Adventures</h1>

			<img src="<?php bloginfo('template_url'); ?>/images/adventure-photos/canoe-girl.jpg" alt="Sleeping Bag Icon"></img>
			<img src="<?php bloginfo('template_url'); ?>/images/adventure-photos/beach-bonfire.jpg" alt="Sleeping Bag Icon"></img>
			<img src="<?php bloginfo('template_url'); ?>/images/adventure-photos/mountain-hikers.jpg" alt="Sleeping Bag Icon"></img>
			<img src="<?php bloginfo('template_url'); ?>/images/adventure-photos/night-sky.jpg" alt="Sleeping Bag Icon"></img>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>

<?php
    /* Template Name: Contact Template*/

?>
<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

			<iframe
				width="600"
				height="450"
				frameborder="0" style="border:0"
				src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAEi-YtbeYmomXSoSgWzrZYXELMnSEzu6o
				&q=1490+W+Broadway,+Vancouver,+BC" allowfullscreen>
			</iframe>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

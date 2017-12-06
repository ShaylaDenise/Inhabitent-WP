<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="shop-header">
	<h1>Shop Stuff</h1>
	<ul class="product-type-nav">
		<a><li>Do</li></a>
		<a><li>Eat</li></a>
		<a><li>Sleep</li></a>
		<a><li>Wear</li></a>
	</ul>
</div>
<section class="content-area-shop">


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content-products' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content-products', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

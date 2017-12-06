<?php
    /* Template Name: About Template*/

?>
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

<?php get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <img src="<?php bloginfo('template_url'); ?>/images/about-hero.jpg" alt="Weathered Canoes"></img>
    <h1>About</h1>
    <h2>Our Story</h2>
    <?php echo CFS()->get( 'about_our_story' ); ?>

    <h2>Our Team</h2>
    <?php echo CFS()->get( 'about_our_team' ); ?>

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/content', 'page' ); ?>

    <?php endwhile; // End of the loop. ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>

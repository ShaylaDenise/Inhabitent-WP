<?php
/* Template Name: Home Template*/
 ?>

<?php
if(is_front_page())
 {
     get_header('front-page');
 }
 else
 {
     get_header();
 }
?>

	<div id="primary" class="content-area">
		<main id="main-front" class="site-main" role="main">
			<section class="home-hero">
				<img src="<?php bloginfo('template_url'); ?>/images/logos/inhabitent-logo-full.svg" alt="Inhabitent Logo"></img>
			</section>
			<section class="product-info-container">
				<h2 class="front">Shop Stuff</h2>
				<div class="product-blocks">
					<div class="product-block-wrapper">
						<img src="<?php bloginfo('template_url'); ?>/images/product-type-icons/do.svg" alt="Map Icon With Folds"></img>
						<p class="product-block-text">Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
						<a href="<?php bloginfo('template_url'); ?>/" class="button">Do Stuff</a>
					</div>
					<div class="product-block-wrapper">
						<img src="<?php bloginfo('template_url'); ?>/images/product-type-icons/eat.svg" alt="Steaming Mug Icon"></img>
						<p class="product-block-text">Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
						<a href="<?php bloginfo('template_url'); ?>/" class="button">Eat Stuff</a>
					</div>
					<div class="product-block-wrapper">
						<img src="<?php bloginfo('template_url'); ?>/images/product-type-icons/sleep.svg" alt="Sleeping Bag Icon"></img>
						<p class="product-block-text">Get a good night's rest in the wild in a home away from home that travels well.</p>
						<a href="<?php bloginfo('template_url'); ?>/" class="button">Sleep Stuff</a>
					</div>
					<div class="product-block-wrapper">
						<img src="<?php bloginfo('template_url'); ?>/images/product-type-icons/wear.svg" alt="Toque Icon"></img>
						<p class="product-block-text">From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
						<a href="<?php bloginfo('template_url'); ?>/" class="button">Wear Stuff</a>
					</div>
				</div>
			</section>
      <section class="recent-posts">
        <h2 class="front">Inhabitent Journal</h2>
        <?php
        $args = array(
          'post__in' => array(
            '225',
            '228',
            '230'
          )
        );
        $posts = get_posts( $args );
        ?>
        <section class="journal-posts">
          <ul>
            <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
              <li>
                <div class="journal-wrapper">
                  <?php the_post_thumbnail(); ?>
                </div>
                <div class="journal-info">
                  <span class="meta-content"><p class="meta"><?php the_date(); ?>/<?php comments_number(); ?></p></span>
                  <h3 class="journal-link"><a href="<?php bloginfo('template_url'); ?><?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                  <a href="<?php bloginfo('template_url'); ?><?php the_permalink() ?>" class="read-entry-btn">Read Entry</a>
                </div>
              </li>
            <?php endforeach; wp_reset_postdata(); ?>
          </ul>
        </section>
			</section>
      <h2 class="front">Lastest Adventures</h2>
      <?php
        $args = array( 'post_type' => 'adventure', 'order' => 'ASC' );
        $adventure_posts = get_posts( $args );
      ?>
      <section class="adventure-posts">
        <ul>
          <?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>
            <li>
              <div class="adventure-wrapper">
                <?php the_post_thumbnail(); ?>
                <div class="adventure-info">
                  <h3 class="adventure-link"><a href="<?php bloginfo('template_url'); ?><?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                  <a href="<?php bloginfo('template_url'); ?><?php the_permalink() ?>" class="read-more-btn">Read More</a>
                </div>
              </div>
            </li>
          <?php endforeach; wp_reset_postdata(); ?>
        </ul>
        <a href="<?php bloginfo('template_url'); ?>" class="more-adventures-btn">More Adventures</a>
      </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

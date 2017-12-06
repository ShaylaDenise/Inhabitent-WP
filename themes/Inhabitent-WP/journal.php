<?php
 /*
 Template Name: Jounal Template
 Template Post Type: page, posts
 */
?>
<?php

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			$args = array(
				'post__in' => array(
					'225',
					'228',
					'230',
					'232',
					'241'
				)
			);
			$posts = get_posts( $args );
			?>
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

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

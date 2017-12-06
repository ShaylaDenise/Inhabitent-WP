<?php
 /*
 Template Name: Adventure Stars
 Template Post Type: post, page, adventure
 */
?>

<?php
 get_header(); ?>

 	<div id="primary" class="content-area sixteen columns">
 		<main id="main" class="site-main" role="main">

 			<?php while ( have_posts() ) : the_post(); ?>

 				<?php get_template_part( 'template-parts/content', 'page' ); ?>
        <div class="content-head-adventure">
          <h1 class="content-title">Star gazing at the night sky</h1>
          <span class="byline">By Shayla Landriault</span>
        </div>
        <div class="content-text">
          <p class="text">Tote bag pitchfork food truck kickstarter quinoa sustainable. Literally +1 normcore bitters selvage, meditation bicycle rights jean shorts fap crucifix put a bird on it. Art party chillwave craft beer, distillery PBR&B hoodie salvia bespoke keytar. Meditation chicharrones chartreuse meggings. Tattooed franzen narwhal tote bag. Raw denim chambray mlkshk tofu synth. Sartorial mlkshk four loko meggings, lumbersexual butcher vegan photo booth small batch vice pop-up salvia truffaut heirloom disrupt.</p>
          <p class="text">You probably haven’t heard of them ethical migas pour-over. You probably haven’t heard of them freegan hoodie butcher wayfarers truffaut. Artisan squid mustache thundercats +1. Asymmetrical selvage plaid butcher. Cronut small batch fashion axe blog VHS ennui. Vegan biodiesel four loko chambray, pickled marfa shoreditch sartorial chia stumptown mumblecore put a bird on it tacos. Keytar blue bottle tacos, stumptown skateboard pug sriracha ramps offal fap.</p>
          <p class="text">Stumptown lomo migas squid, ennui flexitarian normcore swag four dollar toast neutra authentic YOLO pour-over messenger bag organic. Chia distillery tofu sriracha lomo. Retro food truck hammock, pinterest next level everyday carry fanny pack meh typewriter pug bespoke tilde wayfarers williamsburg. Readymade flannel iPhone hella, brooklyn asymmetrical tacos actually humblebrag tilde affogato four dollar toast post-ironic blue bottle. Fashion axe mumblecore cornhole scenester. Authentic tofu XOXO vegan literally. Yuccie single-origin coffee fixie food truck, hashtag cardigan poutine hoodie slow-carb fanny pack flexitarian.</p>
        </div>
          <section class="text-foot">
            <div class="social-media">
              <button type="button" class="social-button"><i class="fa fa-facebook"></i>Like</button>
              <button type="button" class="social-button"><i class="fa fa-twitter"></i>Tweet</button>
              <button type="button" class="social-button"><i class="fa fa-pinterest"></i>Pin</button>
            </div>
          </section>

 			<?php endwhile; // End of the loop. ?>

 		</main><!-- #main -->
 	</div><!-- #primary -->


 <?php get_footer(); ?>

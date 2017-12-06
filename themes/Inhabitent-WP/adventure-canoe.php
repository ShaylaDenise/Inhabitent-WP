<?php
 /*
 Template Name: Adventure Canoe
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
          <h1 class="content-title">Getting Back to Nature in a Canoe</h1>
          <span class="byline">By Shayla Landriault</span>
        </div>
        <div class="content-text">
          <p class="text">Semiotics flannel artisan, squid whatever YOLO cold-pressed thundercats slow-carb normcore. Meggings lo-fi franzen waistcoat tattooed, pour-over etsy artisan. Seitan butcher tacos gentrify. Raw denim fap yr shabby chic. Thundercats mustache mlkshk messenger bag. Cronut crucifix wolf, artisan VHS skateboard chambray single-origin coffee fap. Shabby chic brooklyn meh kale chips, pour-over forage farm-to-table irony flannel mumblecore heirloom pickled cred.</p>
            <p class="text">Swag chillwave chicharrones quinoa. Plaid yr small batch four loko. Polaroid scenester tattooed, biodiesel quinoa mumblecore 3 wolf moon leggings iPhone small batch sartorial meditation pop-up cardigan. Chillwave kitsch asymmetrical artisan, actually kogi cronut portland pork belly cardigan sustainable. Letterpress hammock heirloom kogi selvage biodiesel. Scenester occupy cornhole, banh mi post-ironic taxidermy crucifix mumblecore. Authentic pug next level, health goth slow-carb truffaut neutra literally biodiesel butcher retro.</p>
            <p class="text">Intelligentsia food truck taxidermy before they sold out hoodie mustache. Disrupt trust fund gluten-free, tilde you probably haven’t heard of them whatever seitan hammock listicle tumblr. Venmo kale chips kitsch authentic raw denim pabst. Quinoa chicharrones flannel PBR&B, narwhal sartorial jean shorts VHS DIY bespoke gastropub hella. Man braid squid humblebrag migas leggings, semiotics hella selvage kombucha blog williamsburg synth before they sold out. Plaid synth chicharrones, before they sold out neutra single-origin coffee cred. Pitchfork small batch etsy readymade, post-ironic pug viral.</p>
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

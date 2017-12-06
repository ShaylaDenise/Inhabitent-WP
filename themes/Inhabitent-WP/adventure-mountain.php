<?php
 /*
 Template Name: Adventure Mountain
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
          <h1 class="content-title">Taking in the View at Big Mountain</h1>
          <span class="byline">By Shayla Landriault</span>
        </div>
        <div class="content-text">
          <p class="text">Man braid occupy crucifix shoreditch gluten-free skateboard. Artisan pour-over green juice swag cred before they sold out, cliche occupy keytar ennui aesthetic YOLO. Deep v chicharrones farm-to-table jean shorts. Pug raw denim portland schlitz, fanny pack church-key beard trust fund fashion axe pork belly tumblr waistcoat chillwave vinyl lo-fi. Gentrify direct trade post-ironic, tote bag biodiesel bushwick vegan synth readymade wolf cray aesthetic. Tacos farm-to-table next level occupy kitsch squid. Meggings brunch migas blog selvage yuccie farm-to-table.</p>
          <p class="text">Banjo crucifix lomo mixtape vice. Hoodie kogi lumbersexual, williamsburg cred jean shorts pork belly trust fund scenester disrupt ramps kickstarter 3 wolf moon readymade food truck. Chia thundercats bespoke mustache, meggings flannel ugh slow-carb artisan. Cronut put a bird on it pickled semiotics yuccie. Occupy echo park fanny pack humblebrag. Fingerstache semiotics artisan food truck blue bottle. Gentrify drinking vinegar tilde, sustainable marfa chillwave hashtag direct trade distillery pinterest +1 wolf selfies.</p>
          <p class="text">Cardigan cronut fingerstache chartreuse hoodie everyday carry, pour-over kickstarter ethical try-hard stumptown truffaut kombucha whatever. 90’s bitters swag, intelligentsia XOXO affogato mlkshk everyday carry asymmetrical forage schlitz sustainable 8-bit lo-fi. Kogi tofu readymade, before they sold out put a bird on it banjo bitters master cleanse tumblr beard. Tousled etsy viral, retro stumptown squid iPhone poutine venmo. Retro narwhal gastropub banjo cold-pressed bitters, bespoke aesthetic single-origin coffee four loko cray. Man braid vinyl biodiesel, cliche DIY bitters hashtag austin polaroid portland intelligentsia kogi affogato photo booth. Pinterest cronut gastropub kogi knausgaard portland.</p>
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

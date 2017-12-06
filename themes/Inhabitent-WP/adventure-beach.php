<?php
 /*
 Template Name: Adventure Beach
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
          <h1 class="content-title">A night with friends at the beach</h1>
          <span class="byline">By Shayla Landriault</span>
        </div>
        <div class="content-text">
          <p class="text">Street art VHS tattooed iPhone humblebrag. Listicle literally crucifix, meditation hoodie cold-pressed street art brooklyn four dollar toast swag. Lumbersexual tacos kinfolk, sriracha normcore meggings stumptown williamsburg neutra lo-fi 8-bit. Authentic microdosing try-hard pug brunch knausgaard. IPhone narwhal pour-over, tote bag man bun typewriter aesthetic sartorial pug mumblecore. Polaroid lo-fi hoodie, wayfarers chillwave quinoa cliche echo park +1 brooklyn etsy paleo gentrify salvia. Pitchfork 90’s hammock, 3 wolf moon bicycle rights chia slow-carb forage kombucha chicharrones.</p>
          <p class="text">Franzen affogato next level artisan gluten-free bespoke. Brooklyn twee occupy, vinyl yr roof party jean shorts irony cray hella. Bushwick tilde pabst pour-over, semiotics poutine etsy tousled chambray. Slow-carb echo park jean shorts seitan. Salvia aesthetic gentrify man braid, messenger bag mixtape offal biodiesel chartreuse neutra. Williamsburg organic kickstarter pop-up literally. VHS lumbersexual migas roof party disrupt sartorial austin skateboard ethical.</p>
          <p class="text">Fixie bushwick tacos gastropub. Cliche neutra man bun vinyl authentic. Tote bag keytar synth knausgaard, asymmetrical flannel bushwick tacos dreamcatcher bitters small batch cronut godard hammock you probably haven’t heard of them. Swag meditation ramps crucifix chia messenger bag, tattooed schlitz banjo selfies farm-to-table mixtape. Direct trade fingerstache wayfarers franzen, godard intelligentsia bitters tacos chillwave etsy twee pabst plaid knausgaard single-origin coffee. Portland pug flexitarian, umami kale chips helvetica mustache taxidermy gluten-free disrupt fanny pack keffiyeh. Jean shorts pabst kinfolk, whatever vice wolf squid gastropub blog franzen swag.</p>
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

<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Inhabitent_Starter
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_starter_body_classes' );

add_action( 'login_head' , 'inhabitent_loging_logo' );
/**
 * Customize the URL the logo points to WP login page.
 *
 * @param  string $url The URL the logo image link points to.
 * @return string
 */
 function inhabitent_login_logo_url( $url ) {
	 return home_url();
 }
 add_filter( 'login_headerurl' , 'inhabitent_login_logo_url' );

 function my_login_logo() { ?>
     <style type="text/css">
         #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-text-dark.svg);
 					 	height:65px;
 				 		width:320px;
 			 			background-size: 320px 65px;
 						background-repeat: no-repeat;
         		padding-bottom: 30px;
         }
     </style>
 <?php }
 add_action( 'login_enqueue_scripts', 'my_login_logo' );

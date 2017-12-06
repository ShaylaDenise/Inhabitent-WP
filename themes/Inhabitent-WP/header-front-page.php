<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>
	<?php is_home(); ?>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead-front" class="site-header-front" role="banner">
				<div class="container-front">
					<div class="site-branding-front">
						<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logos/inhabitent-logo-tent-white.svg" id="white-logo" alt="White Tent Logo"></img></a>
						<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<p class="site-description-front"><?php bloginfo( 'description' ); ?></p>
					<!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation" role="navigation">
						<a href="/wordpress/shop"><button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">Shop<?php esc_html( 'Primary Menu' ); ?></button></a>
						<a href="/wordpress/journal"><button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">Journal<?php esc_html( 'Primary Menu' ); ?></button></a>
						<a href="/wordpress/about"><button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">About<?php esc_html( 'Primary Menu' ); ?></button></a>
						<a href="/wordpress/find-us"><button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">Find Us<?php esc_html( 'Primary Menu' ); ?></button></a>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->
          </div>
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">

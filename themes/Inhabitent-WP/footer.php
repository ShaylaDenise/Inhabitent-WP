<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
<div id="footer" class="secondary">
	<div id="sidebar-1">
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php
			if (   ! is_active_sidebar( 'first-footer-widget-area'  )
			&& ! is_active_sidebar( 'second-footer-widget-area' )
			)
			return;
			if (   is_active_sidebar( 'first-footer-widget-area'  )
			&& is_active_sidebar( 'second-footer-widget-area' )
			) : ?>
			<div class="footer-block">
				<div class="first half left widget-area">
					<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
				</div><!-- .first .widget-area -->
			</div>
			<div class="footer-block">
				<div class="second half widget-area">
					<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
				</div><!-- .second .widget-area -->
			</div>
			<?php endif;?>
			<div class="footer-block">
				<div class="site-info">
					<img src="<?php bloginfo('template_url'); ?>/images/logos/inhabitent-logo-text.svg" id="foot-logo" alt="Inhabitent Logo"></img>
				</div><!-- .site-info -->
			</div>
			<p id="copyright">Copyright &copy 2017 Inhabitent</p>
		</footer>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

	</body>
</html>

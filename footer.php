<?php
/**
 * Footer section template.
 * @package Kniconic
 * @since Kniconic 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
		<div class="footercopy"><?php echo get_theme_mod( 'textarea_copy', 'custom footer text left' ); ?></div>
		<div class="footercredit"><?php echo get_theme_mod( 'custom_text_right', 'custom footer text right' ); ?></div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<div class="clear"></div>
</div><!-- #page -->
<div class="site-wordpress">
	<a href="https://github.com/karlnicoll/Kniconic">Kniconic</a> Theme | Powered by <a href="http://wordpress.org">Wordpress</a>
</div><!-- .site-info -->

<?php wp_footer(); ?>
</body>
</html>
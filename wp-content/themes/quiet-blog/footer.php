<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package quiet_blog
 */

?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php if ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) ) : ?>
			<div id="footer-widgets" class="container">
				<?php
					get_template_part( 'inc/footer', 'widgets' );
				?>
			</div><!-- .container -->
		<?php endif; ?>

		<div class="site-info">
			<div class="container">
				<?php
				$quiet_blog_copyright_text = sprintf( __( 'Theme Quiet Blog Powered by %s', 'quiet-blog' ), '<a target="_blank" rel="designer" href="'.esc_url( 'https://kantipurthemes.com/' ).'">'. esc_html__( 'Kantipur Themes', 'quiet-blog' ). '</a>' ); ?>

				<?php echo $quiet_blog_copyright_text; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			</div><!-- .container -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<a href="#page" class="to-top"></a>
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

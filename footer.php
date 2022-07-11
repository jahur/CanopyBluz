<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Xry
 */

?>

	<footer id="footer" class="site-footer clear">
		<div class="top-footer"></div>
		<div class="middle-footer"></div>
		<div class="bottom-footer">
			<div class="bottom-footer-inner container">
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'xry' ) ); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'xry' ), 'WordPress' );
						?>
					</a>
					<span class="sep"> | </span>
						<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Theme: %1$s by %2$s.', 'xry' ), 'Xry', '<a href="https://thetechydots.com/">The Techy Dots</a>' );
						?>
				</div><!-- .site-info -->
			</div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

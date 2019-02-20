<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package palmixio
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	
	
<?php // reference: Themetry - https://themetry.com/flexible-footer-widgets/

if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>
	<div class="footer-widgets">
		<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
			<div class="footer-widget-area">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</div>
		<?php endif; ?>
		<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
			<div class="footer-widget-area">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</div>
		<?php endif; ?>
		<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
			<div class="footer-widget-area">
				<?php dynamic_sidebar( 'footer-3' ); ?>
			</div>
		<?php endif; ?>
	</div><!-- .footer-widgets -->
<?php endif; ?>
<!-- #secondary -->

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'palmixio' ) ); ?>">
			<i class="fas fa-burn"></i>
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'palmixio' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'palmixio' ), 'palmixio', '<i class="far fa-user"></i><a title="Colixio" href="https://www.colixio.com/">Colixio</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package palmixio
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses palmixio_header_style()
 */
function palmixio_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'palmixio_custom_header_args', array(
		'default-image'          => get_template_directory_uri() . '/images/background-header1.png',
		'default-text-color'     => '545454',
		'width'                  => 1024,
		'height'                 => 240,
		'flex-width'             => false,
      'flex-height'            => false,
		'wp-head-callback'       => 'palmixio_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'palmixio_custom_header_setup' );

$header_images = array(
    'palmixioimg1' => array(
            'url'           => get_template_directory_uri() . '/images/background-header1.png',
            'thumbnail_url' => get_template_directory_uri() . '/images/background-header1_thumbnail.png',
            'description'   => 'Palmixio Image Default Primary',
    ),
    'palmixioimg2' => array(
            'url'           => get_template_directory_uri() . '/images/background-header2.png',
            'thumbnail_url' => get_template_directory_uri() . '/images/background-header2_thumbnail.png',
            'description'   => 'Palmixio Image Default Secondary',
    ),
    
);
register_default_headers( $header_images );

if ( ! function_exists( 'palmixio_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see palmixio_custom_header_setup().
	 */
	function palmixio_header_style() {
		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
			?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}
		<?php
		// If the user has set a custom color for the text use that.
		else :
			?>
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		<?php endif; ?>
		</style>
		<?php
	}
endif;

 
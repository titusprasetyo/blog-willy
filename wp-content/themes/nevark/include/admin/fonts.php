<?php
/**
 * Functions for sending list of fonts available
 * 
 * Also add them to sanitization array (list of allowed options)
 *
 * @package    Nevark
 * @subpackage Theme
 */

/**
 * Build URL for loading Google Fonts
 * @credit http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 *
 * @since 1.0
 * @access public
 * @return void
 */
function nevark_google_fonts_enqueue_url() {
	$fonts_url = '';
	$query_args = apply_filters( 'nevark_google_fonts_enqueue_url_args', array() );

	/** If no google font loaded, load the default ones **/
	if ( !is_array( $query_args ) || empty( $query_args ) ):

		/* Translators: If there are characters in your language that are not
		* supported by this font, translate this to 'off'. Do not translate
		* into your own language.
		*/
		$roboto = _x( 'on', 'Roboto font: on or off', 'nevark' );
 
		/* Translators: If there are characters in your language that are not
		* supported by this font, translate this to 'off'. Do not translate
		* into your own language.
		*/
		$comfortaa = ( 'alternate' == hoot_get_mod( 'logo_fontface' ) || 'alternate' == hoot_get_mod( 'headings_fontface' ) ) ?
					 _x( 'on', 'Comfortaa font: on or off', 'nevark' ) : 'off';
		$oswald =    ( 'display' == hoot_get_mod( 'logo_fontface' ) || 'display' == hoot_get_mod( 'headings_fontface' ) ) ?
					 _x( 'on', 'Oswald font: on or off', 'nevark' ) : 'off';
		$oranienbaum = ( 'heading' == hoot_get_mod( 'logo_fontface' ) || 'heading' == hoot_get_mod( 'headings_fontface' ) ) ?
					 _x( 'on', 'Oranienbaum font: on or off', 'nevark' ) : 'off';
		$slabo =     ( 'heading2' == hoot_get_mod( 'logo_fontface' ) || 'heading2' == hoot_get_mod( 'headings_fontface' ) ) ?
					 _x( 'on', 'Slabo 27px font: on or off', 'nevark' ) : 'off';

		if ( 'off' !== $roboto || 'off' !== $comfortaa || 'off' !== $oswald || 'off' !== $oranienbaum || 'off' !== $slabo ) {
			$font_families = array();

			if ( 'off' !== $roboto ) {
				$font_families[] = 'Roboto:300,400,400i,500,600,700,700i,800';
			}

			if ( 'off' !== $comfortaa ) {
				$font_families[] = 'Comfortaa:400,700';
			}

			if ( 'off' !== $oswald ) {
				$font_families[] = 'Oswald:400';
			}

			if ( 'off' !== $oranienbaum ) {
				$font_families[] = 'Oranienbaum:400';
			}

			if ( 'off' !== $slabo ) {
				$font_families[] = 'Slabo 27px:400';
			}

			if ( !empty( $font_families ) )
				$query_args = array(
					'family' => rawurlencode( implode( '|', $font_families ) ),
					'subset' => rawurlencode( 'latin' ), // rawurlencode( 'latin,latin-ext' ),
				);

			$query_args = apply_filters( 'nevark_google_fonts_query_args', $query_args, $font_families );

		}

	endif;

	if ( !empty( $query_args ) && !empty( $query_args['family'] ) )
		$fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );

	return $fonts_url;
}

/**
 * Modify the font (websafe) list
 * Font list should always have the form:
 * {css style} => {font name}
 * 
 * Even though this list isn't currently used in customizer options (no typography options)
 * this is still needed so that sanitization functions recognize the font.
 *
 * @since 1.0
 * @access public
 * @return array
 */
function nevark_fonts_list( $fonts ) {
	$fonts['"Roboto", sans-serif']    = 'Roboto';
	$fonts['"Comfortaa", sans-serif'] = 'Comfortaa';
	$fonts['"Oswald", sans-serif']    = 'Oswald';
	$fonts['"Oranienbaum", serif']    = 'Oranienbaum';
	$fonts['"Slabo 27px", serif']     = 'Slabo 27px';
	return $fonts;
}
add_filter( 'hoot_fonts_list', 'nevark_fonts_list' );
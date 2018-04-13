<?php
/**
 * Theme Setup
 */
if ( ! function_exists( 'playful_blog_setup' ) ) :

	function playful_blog_setup() {

		/**
		 * Add Theme Supports
		 */
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'video', 'gallery', 'image', 'quotes' ) );
		// Add theme support for Custom Logo.
		add_theme_support(
			'custom-logo', array(
				'width'      => 64,
				'height'     => 64,
				'flex-width' => true,
			)
		);

		/**
		 * Register Nav Menus
		 */
		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'playful-blog' ),
				'footer'  => __( 'Footer Menu', 'playful-blog' ),
			)
		);

	}

endif;
add_action( 'after_setup_theme', 'playful_blog_setup' );

/**
 * Register custom fonts.
 */
function playful_blog_fonts_url() {
	$fonts_url = '';

	/*
	 * Translators: If there are characters in your language that are not
	 * supported by Libre Franklin, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$source_sans_pro = _x( 'on', 'Source Sans Pro font: on or off', 'playful-blog' );
	$merriweather    = _x( 'on', 'Merriweather font: on or off', 'playful-blog' );
	$open_sans       = _x( 'on', 'Open Sans font: on or off', 'playful-blog' );

	$font_families = array();

	if ( 'off' !== $source_sans_pro ) {
		$font_families[] = 'Source Sans Pro:300,400,400i,600';
	}

	if ( 'off' !== $merriweather ) {
		$font_families[] = 'Merriweather:300,400,700';
	}

	if ( 'off' !== $open_sans ) {
		$font_families[] = 'Open Sans:700';
	}

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );

	return esc_url_raw( $fonts_url );
}

/**
 * Add preconnect for Google Fonts.
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function playful_blog_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'playfulblog-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'playful_blog_resource_hints', 10, 2 );


/**
 * Enqueue Scripts & Styles for the Theme
 */
function playful_blog_enqueue_assets() {

	// Bootstrap Stylesheet.
	wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0 alpha' );
	// Default Stylesheet.
	wp_enqueue_style( 'playful-style', get_stylesheet_uri() );

	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'playfulblog-fonts', playful_blog_fonts_url(), array(), null );

	// Font Awesome.
	wp_enqueue_script( 'FA', 'https://use.fontawesome.com/ffe0c98009.js' );

	// JS Scripts.
	wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/js/popper.js', [ 'jquery' ], '1.0.0', true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.0', true );
}
add_action( 'wp_enqueue_scripts', 'playful_blog_enqueue_assets' );

// Includes.
require_once get_template_directory() . '/inc/WP_BOOTSTRAP_NAVWALKER.php';

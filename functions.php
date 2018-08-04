<?php
/**
 * Gutenbergtheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Gutenbergtheme
 */

if ( ! function_exists( 'webergpress_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function webergpress_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on webergpress, use a find and replace
		 * to change 'webergpress' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'webergpress', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'webergpress' ),
			'footer'  => esc_html__( 'Footer', 'webergpress' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for custom color scheme.
		add_theme_support( 'editor-color-palette',
			array(
				'name' => 'strong blue',
				'color' => '#0073aa',
			),
			array(
				'name' => 'lighter blue',
				'color' => '#229fd8',
			),
			array(
				'name' => 'very light gray',
				'color' => '#eee',
			),
			array(
				'name' => 'very dark gray',
				'color' => '#444',
			)
		);

		add_image_size( 'home-small', 480 , 270,true );
		add_image_size( 'home-large', 800 , 450,true );

	}
endif;
add_action( 'after_setup_theme', 'webergpress_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function webergpress_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'webergpress_content_width', 640 );
}
add_action( 'after_setup_theme', 'webergpress_content_width', 0 );

/**
 * Register Google Fonts
 */
function webergpress_fonts_url() {
	$fonts_url = '';

	/*
	 *Translators: If there are characters in your language that are not
	 * supported by Source Sans, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$source_sans = esc_html_x( 'on', 'Source Sans font: on or off', 'webergpress' );

	if ( 'off' !== $source_sans ) {
		$font_families = array();
		$font_families[] = 'Source Sans Pro:400,700,900';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;

}

function webergpress_is_mobile() {

	if ( function_exists( 'jetpack_is_mobile' ) ) {
		return jetpack_is_mobile();
	} else {
		return wp_is_mobile();
	}
}

/**
 * Enqueue scripts and styles.
 */
function webergpress_scripts() {

	wp_dequeue_script( 'babel-polyfill' );

	wp_enqueue_style( 'webergpress-style', get_stylesheet_uri() );

	wp_enqueue_style( 'webergpress-main', get_template_directory_uri() . '/assets/dist/css/main.css' );

	wp_enqueue_style( 'webergpress-fonts', webergpress_fonts_url() );

	wp_enqueue_style( 'dashicons' );

	wp_enqueue_script( 'webergpress-main', get_template_directory_uri() . '/assets/dist/js/main.js', array( 'jquery' ), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'webergpress_scripts' );

// Dequeue Contact Form 7 Styles.
add_filter( 'wpcf7_load_css', '__return_false' );

/**
 * Disable Comment Website URL field.
 *
 * @param array $fields Comment fields.
 *
 * @return mixed
 */
function webergpress_disable_comment_url( $fields ) {
	unset( $fields['url'] );
	return $fields;
}
add_filter( 'comment_form_default_fields', 'webergpress_disable_comment_url' );

function webergpress_bottom_newsletter() {
	?>
	<div class="post-newsletter">
		<?php echo do_shortcode( '[mc4wp_form id="913"]' ); ?>
	</div>
	<?php
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Post Types.
 */
require get_template_directory() . '/inc/post-types.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


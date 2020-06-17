<?php
/**
 * lagoslegacy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lagoslegacy
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'lagoslegacy_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lagoslegacy_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on lagoslegacy, use a find and replace
		 * to change 'lagoslegacy' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lagoslegacy', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'lagoslegacy' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'lagoslegacy_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'lagoslegacy_setup' );




function wpt_theme_styles() {

  
  wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style( 'animate_css', get_template_directory_uri() . '/css/animate.css' );
  wp_enqueue_style( 'settings_css', get_template_directory_uri() . '/revolution/css/settings.css' );
  wp_enqueue_style( 'navigation_css', get_template_directory_uri() . '/revolution/css/navigation.css' );
  wp_enqueue_style( 'ionicons_css', get_template_directory_uri() . '/css/ionicons.min.css' );
  wp_enqueue_style( 'slick_css', get_template_directory_uri() . '/lib/slick/slick.css' );
  wp_enqueue_style( 'slick_slick_theme_css', get_template_directory_uri() . 'lib/slick/slick-theme.css' );
  wp_enqueue_style( 'font_awesome_css', get_template_directory_uri() . '/css/font-awesome.min.css' );
  wp_enqueue_style( 'light_color_css', get_template_directory_uri() . '/css/light-color.css' );
  wp_enqueue_style( 'style_css', get_template_directory_uri() . '/css/style.css' );
  wp_enqueue_style( 'responsive_css', get_template_directory_uri() . '/css/responsive.css' );




}

add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );


function wpt_theme_js() {

	wp_enqueue_script( 'popper_js', get_template_directory_uri() . '/js/popper.js', array('jquery'), '', true);
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'slick_js', get_template_directory_uri() . '/lib/slick/slick.js', array('jquery'), '', true );
	wp_enqueue_script( 'html5lightbox_js', get_template_directory_uri() . '/js/html5lightbox.js', array('jquery'), '', true );
	wp_enqueue_script( 'themepunch_js', get_template_directory_uri() . '/revolution/js/jquery.themepunch.tools.min.js', array('jquery'), '', true ); 
	wp_enqueue_script( 'themepunch_revolution_js', get_template_directory_uri() . '/revolution/js/jquery.themepunch.revolution.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'revolution_extension_actions_js', get_template_directory_uri() . '/revolution/js/revolution.extension.actions.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'revolution_extension_carousel_js', get_template_directory_uri() . '/revolution/js/revolution.extension.carousel.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'revolution_extension_kenburn_js', get_template_directory_uri() . '/revolution/js/revolution.extension.kenburn.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'revolution_extension_layeranimation_js', get_template_directory_uri() . '/revolution/js/revolution.extension.layeranimation.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'revolution_extension_migration_js', get_template_directory_uri() . '/revolution/js/revolution.extension.migration.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'revolution_extension_navigation_js', get_template_directory_uri() . '/revolution/js/revolution.extension.navigation.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'revolution_extension_parallax_js', get_template_directory_uri() . '/revolution/js/revolution.extension.parallax.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'revolution_extension_slideanims_js', get_template_directory_uri() . '/revolution/js/revolution.extension.slideanims.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'revolution_extension_video_js', get_template_directory_uri() . '/revolution/js/revolution.extension.video.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'revolution_initialize2_js', get_template_directory_uri() . '/revolution/js/revolution.initialize2.js', array('jquery'), '', true );
	wp_enqueue_script( 'script_js', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true );



        

}
add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lagoslegacy_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'lagoslegacy_content_width', 640 );
}
add_action( 'after_setup_theme', 'lagoslegacy_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lagoslegacy_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'lagoslegacy' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'lagoslegacy' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'lagoslegacy_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lagoslegacy_scripts() {
	wp_enqueue_style( 'lagoslegacy-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'lagoslegacy-style', 'rtl', 'replace' );

	wp_enqueue_script( 'lagoslegacy-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lagoslegacy_scripts' );

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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


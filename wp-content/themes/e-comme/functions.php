<?php
/**
 * E-Comme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package E_Comme
 */

if ( ! function_exists( 'e_comme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function e_comme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on E-Comme, use a find and replace
	 * to change 'e-comme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'e-comme', get_template_directory() . '/languages' );
	
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	//
	add_theme_support( 'custom-logo', array(
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	));
	
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
		'primary' => esc_html__( 'Primary', 'e-comme' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
		
	add_theme_support( 'woocommerce' );

	add_image_size( 'e-comme-fullwidth', '825', '350', true);
	add_image_size( 'e-comme-home-thumb', '338', '225', true);
	
	
}
endif;
add_action( 'after_setup_theme', 'e_comme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function e_comme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'e_comme_content_width', 640 );
}
add_action( 'after_setup_theme', 'e_comme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function e_comme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'e-comme' ),
		'id'            => 'sidebar-widget-area',
		'description'   => __('Sidebar Widget Area', 'e-comme' ),
		'before_widget' => '<div id="%1$s" class="col-md-12 widget"><div class="row sidebar-widget">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<div class="row widget-heading"><h2>',
		'after_title'   => '</h2></div>',
	));
	
	register_sidebar( array(
		'name' => esc_html__( 'Footer Widget Area', 'e-comme' ),
		'id' => 'footer-widget-area',
		'description' => __( 'footer widget area', 'e-comme' ),
		'before_widget' => '<div class="col-md-3 col-sm-6 footer-widget">',
		'after_widget'  =>  '</div>',
		'before_title'  =>  '<div class="row widget-heading"><h2>',
		'after_title'   =>  '</h2></div>',
	));
	
}
add_action( 'widgets_init', 'e_comme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function e_comme_scripts() {
	
	
	wp_enqueue_style( 'e-comme-google-fonts-style', '//fonts.googleapis.com/css?family=Tinos:400,700'); 
    wp_enqueue_style( 'font-awesome',  get_template_directory_uri()."/css/font-awesome.min.css");
    wp_enqueue_style( 'bootstrap',  get_template_directory_uri()."/css/bootstrap.min.css");
    wp_enqueue_style( 'animate',  get_template_directory_uri()."/css/animate.min.css");
    wp_enqueue_style( 'simplelightbox',  get_template_directory_uri()."/css/simplelightbox.css");
    wp_enqueue_style( 'swiper',  get_template_directory_uri()."/css/swiper.min.css");
    wp_enqueue_style( 'e-comme-style', get_stylesheet_uri() );
    wp_enqueue_style( 'e-comme-media-style', get_template_directory_uri()."/css/media-screen.css" );
    
        
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); 	}
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '20120206', true );
	wp_enqueue_script( 'simple-lightbox', get_template_directory_uri() . '/js/simple-lightbox.min.js', array('jquery'), '20120206', true );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper.min.js', array('jquery'), '20120206', true );
	wp_enqueue_script( 'e-comme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), '20120206', true );
	wp_enqueue_script( 'e-comme-custom-script', get_template_directory_uri() . '/js/custom-script.js', array('jquery'), '20120206', true );

	wp_enqueue_script( 'respond', get_template_directory_uri().'/js/respond.min.js' );
    wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );
 
    wp_enqueue_script( 'html5shiv',get_template_directory_uri().'/js/html5shiv.js');
    wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );
	
}
add_action( 'wp_enqueue_scripts', 'e_comme_scripts' );

function e_comme_quick_view_button_move() {

	if (class_exists('YITH_WCQV_Frontend')) {
		remove_action('woocommerce_after_shop_loop_item', array(YITH_WCQV_Frontend(), 'yith_add_quick_view_button'), 15);

		add_action('woocommerce_before_shop_loop_item_title', array(YITH_WCQV_Frontend(), 'yith_add_quick_view_button'), 15);

	}

}
add_action('template_redirect', 'e_comme_quick_view_button_move');

if (class_exists('YITH_WCWL')) {
	function e_comme_show_add_to_wishlist(){
		echo do_shortcode('[yith_wcwl_add_to_wishlist]');
	}
	add_action('woocommerce_after_shop_loop_item', 'e_comme_show_add_to_wishlist', 1 );
}


remove_action('woocommerce_after_shop_loop','woocommerce_pagination');
function e_comme_woocommerce_pagination(){
	the_posts_pagination();
}
add_action('woocommerce_after_shop_loop','e_comme_woocommerce_pagination');


function e_comme_custmizer_style(){
        wp_enqueue_style('e-comme-customizer-css', get_template_directory_uri().'/css/customizer-style.css');
}
add_action('customize_controls_print_styles','e_comme_custmizer_style');



require get_template_directory() . '/inc/themefarmer-customizer.php';
require get_template_directory() . '/inc/themefarmer-sanitize-cb.php';
require get_template_directory() . '/inc/themefarmer-variables.php';
require get_template_directory() . '/inc/themefarmer-walker.php';
require get_template_directory() . '/inc/themefarmer-functions.php';
require get_template_directory() . '/inc/themefarmer-breadcrumbs.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/plugin-activation.php';
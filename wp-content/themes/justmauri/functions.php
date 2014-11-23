<?php
/**
 * JustMauri functions and definitions
 *
 * @package JustMauri
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'justmauri_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function justmauri_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on JustMauri, use a find and replace
	 * to change 'justmauri' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'justmauri', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'justmauri' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'justmauri_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
		'caption',
	) );
}
endif; // justmauri_setup
add_action( 'after_setup_theme', 'justmauri_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function justmauri_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'justmauri' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'In_Menu', 'justmauri' ),
		'id'            => 'jm-in-menu',
		'description'   => 'Widget area to hold items in menu',
	        'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>' 

	) );

		register_sidebar( array(
		'name'          => __( 'TwitterSpace', 'justmauri' ),
		'id'            => 'jm-twitter-space',
		'description'   => 'Widget area to twitter stream',
	        'class'         => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>' 

	) );

		/* Footer Widgets */

			register_sidebar( array(
		'name'          => __( 'FooterLeft', 'justmauri' ),
		'id'            => 'jm-footer-1',
		'description'   => 'Footer Widget Space 1',
	        'class'         => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>' 

	) );

					register_sidebar( array(
		'name'          => __( 'FooterCenter', 'justmauri' ),
		'id'            => 'jm-footer-2',
		'description'   => 'Footer Widget Space 2',
	        'class'         => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>' 

	) );

							register_sidebar( array(
		'name'          => __( 'FooterRight', 'justmauri' ),
		'id'            => 'jm-footer-3',
		'description'   => 'Footer Widget Space 3',
	        'class'         => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>' 

	) );
}

add_action( 'widgets_init', 'justmauri_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

/*First things first, load me some jquery! */

function load_jquery() {
    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_script', 'load_jquery' );


/*Now load the other style sheets and scripts */
function justmauri_scripts() {
	wp_enqueue_style( 'justmauri-style', get_stylesheet_uri() );

	/* Adds SASS sheet in */
	wp_enqueue_style( 'justmauri-sass-style', get_template_directory_uri() . '/library/css/justMauri.css' );

	wp_enqueue_script( 'justmauri-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );


	wp_enqueue_script( 'justmauri-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/*Add the Boostrap stuff in */
	wp_enqueue_script( 'justmauri-collapse', get_template_directory_uri() . '/library/bootstrap/javascripts/bootstrap/collapse.js', array('jquery'), '20140518', true );
	wp_enqueue_script( 'justmauri-dropdown', get_template_directory_uri() . '/library/bootstrap/javascripts/bootstrap/dropdown.js', array('jquery'), '20140518', true );
	// wp_enqueue_script( 'justmauri-bootstrap', get_template_directory_uri() . '/library/bootstrap/javascripts/bootstrap.js', array('jquery'), '20140518', true );

	wp_enqueue_script( 'mauri', get_template_directory_uri() . '/js/mauri.js', array('jquery'), '20140518', true );
}
add_action( 'wp_enqueue_scripts', 'justmauri_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
* Load Portfolio Page
**/
require get_template_directory(). '/inc/portfolio.php';

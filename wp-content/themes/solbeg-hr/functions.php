<?php
/**
 * Solbeg hr functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Solbeg_hr
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'solbeg_hr_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function solbeg_hr_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Solbeg hr, use a find and replace
		 * to change 'solbeg-hr' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'solbeg-hr', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'header' ),
				'menu-2' => esc_html__( 'footer' ),
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
				'solbeg_hr_custom_background_args',
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
add_action( 'after_setup_theme', 'solbeg_hr_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function solbeg_hr_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'solbeg_hr_content_width', 640 );
}
add_action( 'after_setup_theme', 'solbeg_hr_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function solbeg_hr_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'solbeg-hr' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'solbeg-hr' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'solbeg_hr_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function solbeg_hr_scripts() {

	// styles
    wp_enqueue_style('slick-theme-style', get_template_directory_uri() . '/js/slick-slider/slick-theme.css' , array(), null );
    wp_enqueue_style('slick-style', get_template_directory_uri() . '/js/slick-slider/slick.css' , array(), null );
	wp_enqueue_style( 'solbeg-hr-main', get_stylesheet_uri(), array(), null );
	wp_enqueue_style( 'solbeg-hr-burger', get_template_directory_uri() . '/css/burger.css', array(), null );
	wp_enqueue_style( 'solbeg-hr-797', get_template_directory_uri() . '/css/responsive797.css', array(), null );
	wp_enqueue_style( 'solbeg-hr-1024', get_template_directory_uri() . '/css/responsive1024.css', array(), null );
	wp_enqueue_style( 'solbeg-hr-1440', get_template_directory_uri() . '/css/responsive1440.css', array(), null );
	wp_enqueue_style( 'solbeg-new', get_template_directory_uri() . '/dist/style.css',
        array('slick-theme-style', 'slick-style', 'solbeg-hr-main', 'solbeg-hr-burger','solbeg-hr-797','solbeg-hr-1024','solbeg-hr-1440'),
        null );


	// scripts
	wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), null, true);
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/js/slick-slider/slick.min.js',  array('jquery'), '1.0', true);
	wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
	wp_enqueue_script('script-js', get_template_directory_uri() . '/dist/script.js', array('jquery', 'main-js'), '1.0',
        true);


	wp_style_add_data( 'solbeg-hr-style', 'rtl', 'replace' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'solbeg_hr_scripts' );

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
/**
 * Delete navigation title 
 */
add_filter('navigation_markup_template', 'my_navigation_markup_template');
function my_navigation_markup_template() {
     return '
     <nav class="navigation %1$s" role="navigation">
         <div class="nav-links">%3$s</div>
     </nav>';
}


/**
 * Сreate_posttype 
 */
function create_posttype() { 
    register_post_type( 'manager',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Managers' ),
                'singular_name' => __( 'Manager' )
            ),
			'menu_position' => 5,
			'supports' => array('title', 'thumbnail'),
            'public' => true,
			'rewrite' => 'manager',
            'has_archive' => true,
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

/*Contact form 7 remove span and br*/
add_filter( 'wpcf7_autop_or_not', '__return_false' );
add_filter('wpcf7_form_elements', function($content) {

    $content = str_replace('<option value="">---</option>', '<option value=""></option>', $content);

    return $content;
});

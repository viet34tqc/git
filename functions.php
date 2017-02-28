<?php
/**
 * Bootstrap theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bootstrap_theme
 */

if (!function_exists('bootstrap_theme_setup')):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
	function bootstrap_theme_setup() {
		/*
			 * Make theme available for translation.
			 * Translations can be filed in the /languages/ directory.
			 * If you're building a theme based on Bootstrap theme, use a find and replace
			 * to change 'bootstrap-theme' to the name of your theme in all the template files.
		*/
		load_theme_textdomain('bootstrap-theme', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
			 * Let WordPress manage the document title.
			 * By adding theme support, we declare that this theme does not use a
			 * hard-coded <title> tag in the document head, and expect WordPress to
			 * provide it for us.
		*/
		add_theme_support('title-tag');

		/*
			 * Enable support for Post Thumbnails on posts and pages.
			 *
			 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'primary' => esc_html__('Primary Menu', 'bootstrap-theme'),
		));

		/*
			 * Switch default core markup for search form, comment form, and comments
			 * to output valid HTML5.
		*/
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('bootstrap_theme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');
	}
endif;
add_action('after_setup_theme', 'bootstrap_theme_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bootstrap_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters('bootstrap_theme_content_width', 640);
}
add_action('after_setup_theme', 'bootstrap_theme_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bootstrap_theme_widgets_init() {
	register_sidebar(array(
		'name' => esc_html__('Sidebar', 'bootstrap-theme'),
		'id' => 'sidebar-1',
		'description' => esc_html__('Add widgets here.', 'bootstrap-theme'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
}
add_action('widgets_init', 'bootstrap_theme_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function bootstrap_theme_scripts() {

	wp_enqueue_script('bootstrap-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

	wp_enqueue_script('bootstrap-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'bootstrap_theme_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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

/*=======================================
=            CUSTOM FUNCTION            =
=======================================*/

/*SITE MENU*/
if (!function_exists('site_menu')) {
	function site_menu() {
		$args = array(
			'theme_location' => 'primary',
			'container' => 'div',
			'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
			'menu_class' => 'nav navbar-nav navbar-right',
		);
		wp_nav_menu($args);
	}
}

/*GET CUSTOM FIELD*/
/*Use legacy way*/
if (!function_exists('site_custom_field')) {
	function site_custom_field($key) {
		return get_post_meta(get_the_id(), $key, true);
	}
}

/*ADD VENDOR LINK*/
if (!function_exists('add_vendor_link')) {
	function add_vendor_link() {
		/*bootstrap css*/
		wp_register_style('bootstrap_stylesheet', get_template_directory_uri() . "/assets/css/bootstrap.min.css");
		wp_enqueue_style('bootstrap_stylesheet');

		/*style.css*/
		wp_register_style('main_stylesheet', get_template_directory_uri() . "/style.css");
		wp_enqueue_style('main_stylesheet');

		/*Google font*/
		wp_register_style('google_font', "//fonts.googleapis.com/css?family=Raleway");
		wp_enqueue_style('google_font');

		/*font awesome*/
		wp_register_style('fontwawesome', "//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css");
		wp_enqueue_style('fontwawesome');

		/*modernizr*/
		wp_register_script('modernizr', "//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js");
		wp_enqueue_script('modernizr');

		/*wordpress automatically includes jquery*/
		/*wp_register_script('jquery-custom', "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js", array(), '3.1.0', true);
		wp_enqueue_script('jquery-custom');*/

		/*bootstrap js*/
		wp_register_script('bootstrap-js', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", '', '', true);
		wp_enqueue_script('bootstrap-js');

		/*main js*/
		wp_register_script('main-js', get_template_directory_uri() . "/assets/js/main.js", '', '', true);
		wp_enqueue_script('main-js');
	}
}

add_action('wp_enqueue_scripts', 'add_vendor_link');
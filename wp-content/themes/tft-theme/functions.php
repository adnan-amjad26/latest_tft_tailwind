<?php
/**
 * tft functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tft
 */

if ( ! defined( 'TFT_VERSION' ) ) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define('TFT_VERSION', '0.1.3');
}

if ( ! defined( 'TFT_TYPOGRAPHY_CLASSES' ) ) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `tft_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they’re removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE’s body class when it
	 * initializes.
	 */
	define(
		'TFT_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if ( ! function_exists( 'tft_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tft_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on tft, use a find and replace
		 * to change 'tft' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tft', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'tft' ),
				'menu-2' => __( 'Footer Menu', 'tft' ),
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

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Remove support for block templates.
		remove_theme_support( 'block-templates' );
	}
endif;
add_action( 'after_setup_theme', 'tft_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tft_widgets_init()
{
	register_sidebar(
		array(
			'name' => __('Footer', 'tft'),
			'id' => 'sidebar-1',
			'description' => __('Add widgets here to appear in your footer.', 'tft'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}

add_action('widgets_init', 'tft_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function tft_scripts()
{
//	wp_enqueue_style( 'tft-style', get_stylesheet_uri(), array(), TFT_VERSION );
	wp_enqueue_script('tft-script', get_template_directory_uri() . '/js/script.min.js', array(), TFT_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}

add_action('wp_enqueue_scripts', 'tft_scripts');

/**
 * Enqueue the block editor script.
 */
function tft_enqueue_block_editor_script()
{
	wp_enqueue_script(
		'tft-editor',
		get_template_directory_uri() . '/js/block-editor.min.js',
		array(
			'wp-blocks',
			'wp-edit-post',
		),
		TFT_VERSION,
		true
	);
}

add_action('enqueue_block_editor_assets', 'tft_enqueue_block_editor_script');

/**
 * Enqueue the script necessary to support Tailwind Typography in the block
 * editor, using an inline script to create a JavaScript array containing the
 * Tailwind Typography classes from TFT_TYPOGRAPHY_CLASSES.
 */
function tft_enqueue_typography_script()
{
	if (is_admin()) {
		wp_enqueue_script(
			'tft-typography',
			get_template_directory_uri() . '/js/tailwind-typography-classes.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			TFT_VERSION,
			true
		);
		wp_add_inline_script('tft-typography', "tailwindTypographyClasses = '" . esc_attr(TFT_TYPOGRAPHY_CLASSES) . "'.split(' ');", 'before');
	}
}

add_action('enqueue_block_assets', 'tft_enqueue_typography_script');

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function tft_tinymce_add_class($settings)
{
	$settings['body_class'] = TFT_TYPOGRAPHY_CLASSES;
	return $settings;
}

add_filter('tiny_mce_before_init', 'tft_tinymce_add_class');

/**
 * Custom template tags for this theme.
 */


require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
require 'cbd_functions.php';

function tables_data_callback()
{
	// Your AJAX request handling code goes here
	// You can echo or return data to be sent back as an AJAX response.
	check_ajax_referer('ajax-nonce', 'nonce');
//	$product = get_field('product');
	if (isset($_SESSION['dataTables'])) {
		$tables = $_SESSION['dataTables'];
	} else {
		$product = intval($_POST['product_id']);
		$tables = get_field('product_tables', $product);
		$tables = array_slice($tables, 0, 1);
		$_SESSION['dataTables'] = $tables;
	}
	$product = intval($_POST['product_id']);
	$tables = get_field('product_tables', $product);
	$response_data = array(
		'tables' => $tables,
	);
	wp_send_json($response_data);
	wp_die();

}

add_action('wp_ajax_tables_data_action', 'tables_data_callback'); // For logged-in users
add_action('wp_ajax_nopriv_tables_data_action', 'tables_data_callback'); // For non-logged-in users

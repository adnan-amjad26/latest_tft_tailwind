<?php
/**
 * tft_redesign functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tft_redesign
 */

if ( ! defined( 'TFT_REDESIGN_VERSION' ) ) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define( 'TFT_REDESIGN_VERSION', '0.1.0' );
}

if ( ! defined( 'TFT_REDESIGN_TYPOGRAPHY_CLASSES' ) ) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `tft_redesign_content_class`
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
		'TFT_REDESIGN_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if ( ! function_exists( 'tft_redesign_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tft_redesign_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on tft_redesign, use a find and replace
		 * to change 'tft_redesign' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tft_redesign', get_template_directory() . '/languages' );

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
				'menu-1' => __( 'Primary', 'tft_redesign' ),
				'menu-2' => __( 'Footer Menu', 'tft_redesign' ),
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
add_action( 'after_setup_theme', 'tft_redesign_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tft_redesign_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', 'tft_redesign' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'tft_redesign' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'tft_redesign_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tft_redesign_scripts() {
	wp_enqueue_style( 'tft_redesign-style', get_stylesheet_uri(), array(), TFT_REDESIGN_VERSION );
	wp_enqueue_script( 'tft_redesign-script', get_template_directory_uri() . '/js/script.min.js', array(), TFT_REDESIGN_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tft_redesign_scripts' );

/**
 * Enqueue the block editor script.
 */
function tft_redesign_enqueue_block_editor_script() {
	wp_enqueue_script(
		'tft_redesign-editor',
		get_template_directory_uri() . '/js/block-editor.min.js',
		array(
			'wp-blocks',
			'wp-edit-post',
		),
		TFT_REDESIGN_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'tft_redesign_enqueue_block_editor_script' );

/**
 * Enqueue the script necessary to support Tailwind Typography in the block
 * editor, using an inline script to create a JavaScript array containing the
 * Tailwind Typography classes from TFT_REDESIGN_TYPOGRAPHY_CLASSES.
 */
function tft_redesign_enqueue_typography_script() {
	if ( is_admin() ) {
		wp_enqueue_script(
			'tft_redesign-typography',
			get_template_directory_uri() . '/js/tailwind-typography-classes.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			TFT_REDESIGN_VERSION,
			true
		);
		wp_add_inline_script( 'tft_redesign-typography', "tailwindTypographyClasses = '" . esc_attr( TFT_REDESIGN_TYPOGRAPHY_CLASSES ) . "'.split(' ');", 'before' );
	}
}
add_action( 'enqueue_block_assets', 'tft_redesign_enqueue_typography_script' );

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function tft_redesign_tinymce_add_class( $settings ) {
	$settings['body_class'] = TFT_REDESIGN_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter( 'tiny_mce_before_init', 'tft_redesign_tinymce_add_class' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


function cbd_setup() {

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'header' => __( 'Header' ),
		'main' => __( 'Main' ),
		'footer-1' => __( 'Footer 1' ),
		'footer-2' => __( 'Footer 2' ),
		'footer-3' => __( 'Footer 3' ),
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'custom-background', apply_filters( 'cbd_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'cbd_setup' );

/**
 * Enqueue scripts and styles.
 */
function cbd_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'cbd-style', get_stylesheet_uri() );
	wp_enqueue_script('libs', get_template_directory_uri() . '/js/libs.js', array(), '', true);
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), '', true);
}
add_action( 'wp_enqueue_scripts', 'cbd_scripts' );

/**
* Theme Settings Page
*/
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title'  => 'Theme Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false,
  ));
}

/**
 * Disable plugin update for stable version prioritet
 */
function filter_plugin_updates($value) {
    unset($value->response['advanced-custom-fields-pro/acf.php']);
    return $value;
}
add_filter('site_transient_update_plugins', 'filter_plugin_updates');

/**
 * Register ACF Blocks
 */
require get_template_directory() . '/inc/register-blocks.php';

/**
 * Ajax
 */
require get_template_directory() . '/inc/ajax.php';

/**
* Hide Menu Item in Admin Bar
*/
function custom_admin_menu() {
	remove_menu_page( 'edit-comments.php' );    //Comments
}
add_action( 'admin_menu', 'custom_admin_menu' );

/**
 * Custom excerpt length
 */
function custom_excerpt_length($length) {
	return 35;
}
add_filter('excerpt_length', 'custom_excerpt_length');

/**
 * Custom excerpt more
 */
 function custom_excerpt_more($more) {
     return '...';
 }
 add_filter( 'excerpt_more', 'custom_excerpt_more' );

/**
* Allow additional MIME types
* Use 'text/plain' instead of 'application/json' for JSON because of a current Wordpress core bug
* This allows uploading of JSON files into WP
*/
function add_upload_mimes($types) { 
	$types['json'] = 'text/plain';
	return $types;
}
add_filter( 'upload_mimes', 'add_upload_mimes' );

/**
* Gravity Forms Submit Button
* Replaces default markup for our custom markup with an icon
*/
function custom_gform_submit_button($button, $form) {
	$text = $form['button']['text'];
	return "<button type='submit' id='gform_submit_button_{$form['id']}' class='btn btn-gold'><span>{$text}</span><img decoding='async' loading='lazy' src='/wp-content/themes/cbd/img/btn-gold-left.svg' alt='btn-gold-left'><img decoding='async' loading='lazy' src='/wp-content/themes/cbd/img/btn-gold-right.svg' alt='btn-gold-right'></button>";
}
add_filter( 'gform_submit_button', 'custom_gform_submit_button', 10, 2 );

 /**
 * Find matching product variation by attributes
 */
function find_matching_product_variation_id($product_id, $attributes) {
	return (new \WC_Product_Data_Store_CPT())->find_matching_product_variation(
		new \WC_Product($product_id), $attributes);
}

/**
 * Allows to remove products in checkout page
 */
function woocommerce_checkout_remove_item($product_name, $cart_item, $cart_item_key) {
	if(is_checkout()) {
		$_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
		$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
		$remove_link = apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
			'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">×</a>',
			esc_url( WC()->cart->get_remove_url( $cart_item_key ) ),
			__( 'Remove this item', 'woocommerce' ),
			esc_attr( $product_id ),
			esc_attr( $_product->get_sku() )
        ), $cart_item_key );
		return '<span>' . $remove_link . '</span> <span>' . $product_name . '</span>';
	}
	return $product_name;
}
add_filter( 'woocommerce_cart_item_name', 'woocommerce_checkout_remove_item', 10, 3 );

/**
 * Remove Cart Message WooCommerce
 */
add_filter( 'wc_add_to_cart_message_html', '__return_false' );
add_filter('woocommerce_cart_item_removed_notice_type', '__return_null');

/**
 * Remove Checkout Redirect Empty Cart Message
 */
add_filter( 'woocommerce_checkout_redirect_empty_cart', '__return_false' );
add_filter( 'woocommerce_checkout_update_order_review_expired', '__return_false' );

/**
 * Disable the default WooCommerce stylesheet
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Restriction for one product in cart
 */
function only_one_item_in_cart($cartItem) {
	wc_empty_cart();
	return $cartItem;
}
add_filter( 'woocommerce_add_cart_item_data', 'only_one_item_in_cart', 10, 1 );




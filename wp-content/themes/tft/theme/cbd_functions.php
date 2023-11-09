<?php
/**
 * CBD functions and definitions
 * @package CBD
 */
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
//	wp_enqueue_script('dotlottie', 'https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs', [], null, true);
	wp_enqueue_script('script-cbd', get_template_directory_uri() . '/js/script_cbd.js', array(),time(),true);
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

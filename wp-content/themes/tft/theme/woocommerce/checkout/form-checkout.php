<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="title-bar title-post s-padding" data-scroll-section>
	<div class="container relative z-30">
		<div class="row relative">
			<div class="w-full lg:w-3/5 s-padding hero-col">
				<div class="title">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
	<figure class="bg absolute top-0 left-0 w-full z-0 opacity-80">
		<div class="imgs-day">
			<img src="<?php echo get_template_directory_uri(); ?>/img/day/single-post-bg.svg" alt="single-post-bg">
		</div>
		<div class="imgs-night">
			<img src="<?php echo get_template_directory_uri(); ?>/img/single-post-bg.jpg" alt="single-post-bg.jpg">
		</div>
	</figure>
	<div class="container relative z-30 woocommerce-checkout-wrap">
		<?php if(!WC()->cart->cart_contents_count == 0): ?>
			<?php do_action( 'woocommerce_before_checkout_form', $checkout );
			// If checkout registration is disabled and not logged in, the user cannot checkout.
			if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
				echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
				return;
			} ?>
			<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
				<div class="row justify-between">
					<div class="w-full lg:w-1/2 mb-12">
						<?php if ( $checkout->get_checkout_fields() ) : ?>
							<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>
							<?php do_action( 'woocommerce_checkout_billing' ); ?>
							<?php do_action( 'woocommerce_checkout_shipping' ); ?>
							<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
						<?php endif; ?>
						<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
					</div>
					<div class="w-full lg:w-1/3 2xl:w-5/12 mb-12">
						<h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>
						<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>
						<div id="order_review" class="woocommerce-checkout-review-order">
							<?php do_action( 'woocommerce_checkout_order_review' ); ?>
						</div>
						<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
					</div>
				</div>
			</form>
			<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
		<?php else: ?>
			<div class="checkout-empty text-center">
				<h3><?php _e( 'Checkout is empty', 'cbd' ); ?></h3>
				<p><?php _e( 'Please go back to the home page and choose your product.', 'cbd' ); ?></p>
				<a href="<?php echo home_url(); ?>" class="button wp-element-button"><?php _e( 'Back to Home', 'cbd' ); ?></a>
			</div>
		<?php endif; ?>
	</div>
	<figure class="imgs-day absolute bottom-0 left-0 w-full h-third z-0 bg-gradient-to-b from-lilac-dark to-purple-darker">
	</figure>
</section>
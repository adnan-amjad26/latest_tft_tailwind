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
<section class="checkout-page pt-64 relative s-padding" data-scroll-section>
    <!--- Page background --->
	<figure class="bg absolute top-0 left-0 w-full h-full z-0">
		<div class="imgs-day hidden relative z-10 sm:h-screen">
			<img class="sm:object-cover sm:h-screen sm:object-center sm:w-full" src="<?php echo get_template_directory_uri(); ?>/img/checkout-bg-light.png" alt="Checkout background day">
		</div>
		<div class="imgs-night relative z-10 sm:h-screen">
			<img class="sm:object-cover sm:h-screen sm:object-center sm:w-full" src="<?php echo get_template_directory_uri(); ?>/img/checkout-bg-dark.png" alt="Checkout background night">
		</div>
        <div class="check-bg-day absolute left-0 top-14 w-full h-full"></div>
	</figure>
    <!--- Page background --->

	<!--- Checkout Page Title --->
    <div class="checkout-page-title mb-40  sm:h-[20vh]">
        <div class="container max-w-full m-auto pl-4 pr-4 relative z-30">
            <div class="row relative">
                <div class="w-full lg:w-3/5 s-padding hero-col">
                    <div class="title font-wadik text-white text-[64px]/[1.2] sm:text-[40px]/[1.2] sm:text-center">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!--- Checkout Page Title --->

    <!--- Checkout Form --->
	<div class="checkout-form text-white">
        <div class="container max-w-full m-auto pl-4 pr-4 relative z-30 woocommerce-checkout-wrap">
            <?php if(!WC()->cart->cart_contents_count == 0): ?>
                <?php do_action( 'woocommerce_before_checkout_form', $checkout );
                // If checkout registration is disabled and not logged in, the user cannot checkout.
                if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
                    echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
                    return;
                } ?>
                <form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
                    <div class="row flex flex-wrap justify-between">
                        <div class="w-full lg:w-[65%] 2xl:w-[58%] mb-12">
                            <?php if ( $checkout->get_checkout_fields() ) : ?>
                                <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>
                                <?php do_action( 'woocommerce_checkout_billing' ); ?>
                                <?php do_action( 'woocommerce_checkout_shipping' ); ?>
                                <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
                            <?php endif; ?>
                            <?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
                        </div>
                        <div class="w-full lg:w-[33%] 2xl:w-[40%] mb-12">
                            <h3 id="order_review_heading" class="font-wadik text-[32px]/[1.2] sm:text-[24px]/[1.2] text-white mb-[35px]"><?php esc_html_e( 'Your Virtual Order', 'woocommerce' ); ?></h3>
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
                    <h3 class="font-wadik text-[32px]/[1.2] text-white"><?php _e( 'Checkout is empty', 'cbd' ); ?></h3>
                    <p><?php _e( 'Please go back to the home page and choose your product.', 'cbd' ); ?></p>
                    <a href="<?php echo home_url(); ?>" class="button wp-element-button"><?php _e( 'Back to Home', 'cbd' ); ?></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <!--- Checkout Form --->
	<figure class="imgs-day absolute bottom-0 left-0 w-full h-third z-0 bg-gradient-to-b from-lilac-dark to-purple-darker">
	</figure>
</section>
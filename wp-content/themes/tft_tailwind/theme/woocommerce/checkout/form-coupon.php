<?php
/**
 * Checkout coupon form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-coupon.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

if ( ! wc_coupons_enabled() ) { // @codingStandardsIgnoreLine.
	return;
}

?>
<form class="checkout-coupon woocommerce-form-coupon flex items-start" method="post">
	<div class="coupon-wrapper max-w-[588px]">
        <div class="mb-2.5 font-wadik text-[16px]/[1.2em] sm:text-center text-white">
            <label for="coupon_code" class="screen-reader-text"><?php esc_html_e( 'Have a coupon? Click here to enter your code', 'woocommerce' ); ?></label>
            <label for="coupon_code"><?php esc_html_e( 'Have a coupon? Click here to enter your code', 'woocommerce' ); ?></label>
        </div>

        <div class="flex justify-between">
            <input type="text" name="coupon_code" class="input-text text-[14px]/[1.2em] w-[80%] h-[45px] bg-transparent border mr-[14px] text-white border-[#727272] focus:border-[#FF9400] focus:outline-none transition-all" placeholder="" id="coupon_code" value="" />
            <button type="submit" class="font-wadik min-w-[104px] h-[45px] max-w-18% rounded-none bg-[#FF9400] hover:bg-[#8d4314] text-[16px]/[1.2em] text-white transition-all" name="apply_coupon" value="<?php esc_attr_e( 'Verify', 'woocommerce' ); ?>"><?php esc_html_e( 'Verify', 'woocommerce' ); ?></button>
        </div>
    </div>
</form>
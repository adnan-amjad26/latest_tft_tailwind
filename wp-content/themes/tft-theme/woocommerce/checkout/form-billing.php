<?php
/**
 * Checkout billing information form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-billing.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 * @global WC_Checkout $checkout
 */

defined( 'ABSPATH' ) || exit;
?>
<div class="woocommerce-billing-fields">
	<?php if ( wc_ship_to_billing_address_only() && WC()->cart->needs_shipping() ) : ?>

		<h3 class="font-wadik text-[32px]/[1.2] sm:text-[24px]/[1.2] sm:text-center mb-9"><?php esc_html_e( 'Billing &amp; Shipping', 'woocommerce' ); ?></h3>

	<?php else : ?>

		<h3 class="font-wadik text-[32px]/[1.2] sm:text-[24px]/[1.2] sm:text-center mb-9"><?php esc_html_e( 'Billing details', 'woocommerce' ); ?></h3>

	<?php endif; ?>

	<?php do_action( 'woocommerce_before_checkout_billing_form', $checkout ); ?>

	<div class="woocommerce-billing-fields__field-wrapper">
		<?php $fields = $checkout->get_checkout_fields( 'billing' ); ?>
		<?php foreach ( $fields as $key => $field ): ?>
			<?php if($key == 'challenge_type' || $key == 'account_size' || $key == 'account_type' || $key == 'broker' || $key == 'platform'): ?>
				<div class="checkout-toggles-wrap w-full mb-5 sm:mb-[25px]">
					<h4 class="font-wadik text-base mb-[25px] sm:text-center"><?php echo $field['label']; ?></h4>
					<div class="checkout-toggles flex justify-start sm:justify-center flex-wrap sm:text-center">
						<?php foreach($field['options'] as $key => $option): ?>
							<label <?php echo $field['name'].'="'.$key.'"'; ?> class="relative font-bold cursor-pointer uppercase pt-[7px] mb-5 sm:mb-[25px] <?php if($option !== "Purple Trading") : ?>w-[120px] h-[42px]<?php else : ?>w-[176px] h-[42px]<?php endif; ?> flex items-center justify-center text-sm/[1.2] mr-[25px]">
								<input type="<?php echo $field['type']; ?>" class="checkout-input hidden" value="<?php echo $key; ?>" name="<?php echo $field['name']; ?>">
								<span class="check-text z-20"><?php echo $option; ?></span>
                                <?php if($option !== "Purple Trading") : ?>
								<img class="absolute z-0 top-0 left-0 w-full h-auto" src="<?php echo get_template_directory_uri(); ?>/img/btn-simple.svg" alt="btn-simple">
								<?php else : ?>
                                <img class="absolute z-0 top-0 left-0 w-full h-auto" src="<?php echo get_template_directory_uri(); ?>/img/btn-simple2.svg" alt="btn-simple">
                                <?php endif; ?>
							</label>
						<?php endforeach; ?>
					</div>
				</div>
			<?php else: ?>
				<?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>

	<?php do_action( 'woocommerce_after_checkout_billing_form', $checkout ); ?>
</div>

<?php if ( ! is_user_logged_in() && $checkout->is_registration_enabled() ) : ?>
	<div class="woocommerce-account-fields">
		<?php if ( ! $checkout->is_registration_required() ) : ?>

			<p class="form-row form-row-wide create-account">
				<label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
					<input class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" id="createaccount" <?php checked( ( true === $checkout->get_value( 'createaccount' ) || ( true === apply_filters( 'woocommerce_create_account_default_checked', false ) ) ), true ); ?> type="checkbox" name="createaccount" value="1" /> <span><?php esc_html_e( 'Create an account?', 'woocommerce' ); ?></span>
				</label>
			</p>

		<?php endif; ?>

		<?php do_action( 'woocommerce_before_checkout_registration_form', $checkout ); ?>

		<?php if ( $checkout->get_checkout_fields( 'account' ) ) : ?>

			<div class="create-account">
				<?php foreach ( $checkout->get_checkout_fields( 'account' ) as $key => $field ) : ?>
					<?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>
				<?php endforeach; ?>
				<div class="clear"></div>
			</div>

		<?php endif; ?>

		<?php do_action( 'woocommerce_after_checkout_registration_form', $checkout ); ?>
	</div>
<?php endif; ?>
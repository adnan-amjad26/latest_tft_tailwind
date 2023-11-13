<?php 
/**
 * Plugin Name: WC Test Order Command
 * Description: A WP-CLI command to create a test order.
 * Version: 1.0
 * Author: Gregory Morozov
 */

if ( ! class_exists( 'WP_CLI' ) ) {
    return;
}

/**
 * WooCommerce Orders CLI Commands
 */
class WC_Test_Order_Command extends WP_CLI_Command {

    /**
     * Create a WooCommerce order with Pending Payment status and a value of $0.1.
     *
     * ## EXAMPLES
     *
     *     wp wc-create-order
     */
    public function __invoke() {

        // Make sure WooCommerce is active
        if ( ! function_exists( 'WC' ) ) {
            WP_CLI::error( 'WooCommerce is not active. Please activate WooCommerce before using this command.' );
            return;
        }

        // Generated billing data
        $billing_data = array(
            'first_name' => 'John',
            'last_name'  => 'Doe',
            'address_1'  => '123 Main Street',
            'address_2'  => 'Suite 1',
            'city'       => 'San Francisco',
            'state'      => 'CA',
            'postcode'   => '94103',
            'country'    => 'US',
            'email'      => 'john.doe@example.com',
            'phone'      => '555-555-5555',
        );

        // Create a new WooCommerce order
        $order = wc_create_order();

        // Set billing data
        $order->set_address( $billing_data, 'billing' );

        $price = round(mt_rand(10, 30) / 100, 2);
	    
	// Add a product with $0.1 price
        $item = new WC_Order_Item_Product();
        $item->set_props( array(
            'name'         => 'Generated Product',
            'subtotal'     => $price,
            'total'        => $price,
        ) );
        $order->add_item( $item );

        // Calculate totals
        $order->calculate_totals();

        // Set order status to "Pending Payment"
        $order->set_status( 'pending' );

        // Save the order
        $order->save();

        WP_CLI::success( 'Order created with ID: ' . $order->get_id() );
        
	$order_key = $order->get_order_key();
	WP_CLI::success( 'Order Key: ' . $order_key );
	WP_CLI::success( 'Checkout link: ' . get_site_url() . '/solo-checkout/order-pay/' . $order->get_id() . '/?pay_for_order=true&key=' . $order_key);
    }
}

// Register the WooCommerce Order CLI Command
WP_CLI::add_command( 'wc-test-order', 'WC_Test_Order_Command' );

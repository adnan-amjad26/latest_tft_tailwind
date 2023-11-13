<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://https://stagethefundedtraderprogram.com/
 * @since      1.0.0
 *
 * @package    Order_Status_Script
 * @subpackage Order_Status_Script/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Order_Status_Script
 * @subpackage Order_Status_Script/includes
 * @author     Elbek <nasridinovelbek@gmail.com>
 */
class Order_Status_Script_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'order-status-script',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

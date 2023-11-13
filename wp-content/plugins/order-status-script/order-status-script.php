<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://stagethefundedtraderprogram.com/
 * @since             1.0.0
 * @package           Order_Status_Script
 *
 * @wordpress-plugin
 * Plugin Name:       Order Status Script
 * Plugin URI:        https://stagethefundedtraderprogram.com/
 * Description:       Order Status Change  Based on IDs
 * Version:           1.0.0
 * Author:            Elbek
 * Author URI:        https://https://stagethefundedtraderprogram.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       order-status-script
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'ORDER_STATUS_SCRIPT_VERSION', '1.0.0' );
 
/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-order-status-script.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_order_status_script() {

	$plugin = new Order_Status_Script();
	$plugin->run();

}
run_order_status_script();

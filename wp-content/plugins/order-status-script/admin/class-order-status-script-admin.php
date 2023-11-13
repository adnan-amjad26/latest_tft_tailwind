<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://https://stagethefundedtraderprogram.com/
 * @since      1.0.0
 *
 * @package    Order_Status_Script
 * @subpackage Order_Status_Script/admin
 */

class Order_Status_Script_Admin {

    private $plugin_name;
    private $version;

    public function __construct($plugin_name, $version) {
        $this->plugin_name = $plugin_name;
        $this->version = $version;
        add_action('admin_menu', array($this, 'register_my_custom_menu_page'), 99);
        add_action('admin_init', array($this, 'custom_settings_page_init'));
		add_action('wp_ajax_custom_ajax_action', array($this, 'custom_ajax_action_callback'));
        add_action('wp_ajax_nopriv_custom_ajax_action', array($this, 'custom_ajax_action_callback')); 
    }

    public function enqueue_styles() {
        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/order-status-script-admin.css', array(), $this->version, 'all');
    }

    public function enqueue_scripts() {
        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/order-status-script-admin.js', array('jquery'), $this->version, false);
		// Enqueue scripts only on the menu and submenu pages
    }

    public function register_my_custom_menu_page() {
        add_menu_page(
            __('Order Script Menu', 'textdomain'),
            'Order Script Menu',
            'manage_options',
            'order-script-menu',
            array($this, 'order_script'),
            'dashicons-clipboard',
            6
        );
		add_submenu_page(
        'order-script-menu',
        __( 'Order Script Run', 'textdomain' ),
        __( 'Order Script Run', 'textdomain' ),
        'manage_options',
        'order-script-run',
        array($this, 'order_script_run'),
    );
    }

    public function custom_settings_page_init() {
        add_settings_section(
            'custom_settings_section',
            __('Custom Orders Settings Section', 'text-domain'),
            function () {},
            'order-script-menu'
        );

        add_settings_field(
            'custom_textarea_option',
            __('Order IDs Option', 'text-domain'),
            array($this, 'custom_textarea_settings_field'),
            'order-script-menu',
            'custom_settings_section'
        );

        register_setting('custom_settings_group', 'custom_textarea_option');
    }

    public function custom_textarea_settings_field() {
        $option_value = get_option('custom_textarea_option');
		 echo '<p>Please add comma seprate value like(11,12,13,14,15)</p>';
        echo '<textarea name="custom_textarea_option" rows="5" cols="50">' . esc_textarea($option_value) . '</textarea>';
    }

    public function order_script() {
        ?>
        <div class="wrap">
            <h1 class="wp-heading-inline">Order ID Form</h1>
            <div class="main-div">
                <form method="post" action="options.php">
                    <?php
                    settings_fields('custom_settings_group');
                    do_settings_sections('order-script-menu');
                    submit_button();
                    ?>
                </form>
            </div>
        </div>
        <?php
    }
	
	
	public function order_script_run(){ ?>
		
		<div class="wrap">
            <h1 class="wp-heading-inline">Action Page</h1>
			<div class="mains">
             <button id="custom-ajax-button" class="button button-primary">Run Script</button>
			</div>
            <div id="ajax-response"></div>
        </div>
		
	<?php }
	
	public function custom_ajax_action_callback() {
		 $option_value = get_option('custom_textarea_option');
		 if(!empty($option_value)){
			  $updated_order_ids = array();
			  $failed_order_ids = array();
				
			$arrayvalue =   explode(',',$option_value);
			foreach ($arrayvalue as $order_id) {
		 // Get the current post status and post type
			
			$post_type = get_post_type($order_id);
			// Check if the  the post type is 'order'
			if ($post_type === 'shop_order') {
				// Create an array with the updated post data
				$post_data = array(
					'ID' => $order_id,
					'post_status' => 'wc-completed', // Change the status to 'completed'
				);

                
    
$order = new WC_Order($order_id);
 
 
				// Update the post with the new status
				///wp_update_post($post_data);
				//if (wp_update_post($post_data)) {
					//$updated_order_ids[] = $order_id;


				//}
                if (!empty($order)) {
 
                    $order->update_status( 'completed');
                    $updated_order_ids[] = $order_id;
                    }
                else {
					$failed_order_ids[] = $order_id;
				}
			} 
			else {
				$failed_order_ids[] = $order_id;
			} 
		} 
		$response = array(
            'status' => 'success',
            'message' => 'Order status updated successfully!',
            'updated_order_ids' => $updated_order_ids,
            'failed_order_ids' => $failed_order_ids,
        );

        wp_send_json($response);
		 
		 }
		 else{
			 $response = array(
            'status' => 'failed',
            'message' => 'Please Enter Orders Ids',
        );

        wp_send_json($response);
		 }
    }
	
	
}
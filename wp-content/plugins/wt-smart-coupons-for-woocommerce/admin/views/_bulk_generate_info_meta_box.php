<?php
if (!defined('WPINC')) {
    die;
}

/**
 * Bulk generate info html
 * @since 1.4.7
 */

?>
<style type="text/css">
    #wt-sc-bulk-generate-info{ border:none; border-left:solid 3px #00a8ff; background:#edf8ff; font-size:14px; }
    #wt-sc-bulk-generate-info .postbox-header{ border:none; background:#edf8ff;}
    #wt-sc-bulk-generate-info .postbox-header h2{ display:none; }
    #wt-sc-bulk-generate-info .postbox-header .handle-actions{ display:none; }
    #wt-sc-bulk-generate-info .inside{ background:#edf8ff; padding:0px 30px; padding-bottom:20px; color:#434d54;}
</style>
<p>
  <?php esc_html_e('Create bulk coupons within a few clicks.', 'wt-smart-coupons-for-woocommerce');?>
  <?php echo sprintf(__('Get %s WooCommerce Coupon Generator%s plugin.', 'wt-smart-coupons-for-woocommerce'), '<a href="https://www.webtoffee.com/product/woocommerce-coupon-generator/?utm_source=free_plugin_sidebar&utm_medium=smart_coupon_basic&utm_campaign=Coupon_Generator" target="_blank"><b>', '</b></a>'); ?> 
</p>
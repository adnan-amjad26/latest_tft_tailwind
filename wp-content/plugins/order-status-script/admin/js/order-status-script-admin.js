(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */
 
	 

})( jQuery );

jQuery(document).ready(function($) {
    $('#custom-ajax-button').click(function() {
        $.ajax({
            url: ajaxurl,
            type: 'POST',
            data: {
                action: 'custom_ajax_action', // AJAX action registered in Step 1
                // Add any additional data you want to send to the server here
            },
            beforeSend: function() {
                // Show loading/spinner if needed
            },
            success: function(response) {
                if (response && response.status === 'success') {
                     const  updatedOrderIds = response.updated_order_ids;
                     const  failedOrderIds = response.failed_order_ids;
                   

                    if (updatedOrderIds.length > 0) {
                        $('#ajax-response').append('<div class="notice notice-info"><p>Updated Order IDs: ' + updatedOrderIds.join(', ') + '</p></div>');
                    }

                    if (failedOrderIds.length > 0) {
                        $('#ajax-response').append('<div class="notice notice-error"><p>Failed Order IDs: ' + failedOrderIds.join(', ') + '</p></div>');
                    }
                }  else {
                    $('#ajax-response').html('<div class="notice notice-error"><p>' + response.message + '</p></div>');
                } 
            },
            error: function(xhr, textStatus, errorThrown) {
                // Handle AJAX error if any
                $('#ajax-response').html('<div class="notice notice-error"><p>Failed to perform AJAX call!</p></div>');
            }
        });
    });
});
	 
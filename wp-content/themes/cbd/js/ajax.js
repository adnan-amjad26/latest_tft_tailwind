jQuery(document).ready(function($) {

    // TNP Ajax Subscribe
    var request;
    $('.newsletter-form').on('submit', function(event) {
        event.preventDefault();
        if(request) request.abort();
        var $form = $(this),
            $inputs = $form.find('input, select, button, textarea'),
            serializedData = $form.serialize();
        request = $.ajax({
            url: ajax_params.ajax_url,
            type: 'post',
            data: {
                action: 'ajax_subscribe',
                nonce: ajax_params.ajax_nonce,
                ne: $form.find('[name="ne"]').val(),
                data: serializedData
            },
            beforeSend: function() {
                $inputs.prop('disabled', true);
            },
            success: function(response) {
                $form.find('+.newsletter-message').remove();
                var text = $('<div class="newsletter-message newsletter-' + response.status + '">' + response.msg + '</div>').hide();
                $form.trigger('reset').after(text).next().slideDown();
            },
            complete: function() {
                $inputs.prop('disabled', false);
            }
        });
    });

});
<?php
/**
 * Ajax Scripts
 */
function custom_ajax_scripts() {
	wp_register_script('ajax_scripts', get_stylesheet_directory_uri() . '/js/ajax.js', array());
	wp_localize_script('ajax_scripts', 'ajax_params', array(
		'ajax_url' => admin_url('admin-ajax.php'),
		'ajax_nonce' => wp_create_nonce('ajax-nonce'),
	));
	wp_enqueue_script('ajax_scripts');
}
add_action('wp_enqueue_scripts', 'custom_ajax_scripts');

/**
 * Checkout Update Product Variation
 */
function checkout_update_product_variation() {
    foreach(WC()->cart->get_cart() as $cart_item_key => $cart_item) {
        $product_id = $cart_item['product_id'];
    }
    $attributes = array(
        'attribute_pa_challenge_type' => $_POST['challenge_type'],
        'attribute_pa_account_size' => $_POST['account_size'],
        'attribute_pa_account_type' => $_POST['account_type'],
        'attribute_pa_platform' => $_POST['platform'],
        'attribute_pa_broker' => $_POST['broker'],
    );
    $variation_id = find_matching_product_variation_id($product_id, $attributes);
    WC()->cart->empty_cart(); 
    WC()->cart->add_to_cart($variation_id);
    die();
}
add_action('wp_ajax_checkout_update_product_variation', 'checkout_update_product_variation');
add_action('wp_ajax_nopriv_checkout_update_product_variation', 'checkout_update_product_variation');

/**
 * TNP Ajax Newsletter
 */
function tnp_ajax_subscribe() {
    check_ajax_referer('ajax-nonce', 'nonce');
    $data = urldecode($_POST['data']);
    if(!empty($data)):
        $data_array = explode('&', $data);
        $fields = [];
        foreach($data_array as $array):
            $array = explode('=', $array);
            $fields[$array[0]] = $array[1];
        endforeach;
    endif;
    if(!empty($fields)):
        if(filter_var($fields['ne'], FILTER_VALIDATE_EMAIL)):
            global $wpdb;
            $exists = $wpdb->get_var(
                $wpdb->prepare(
                    "SELECT email FROM " . $wpdb->prefix . "newsletter
                    WHERE email = %s",
                    $fields['ne']
                )
            );
            if(!$exists) {
                NewsletterSubscription::instance()->subscribe();
                $output = array(
                    'status'    => 'success',
                    'msg'       => __('Thank you for your Email.', 'cbd')
                );
            } else {
                $output = array(
                    'status'    => 'error',
                    'msg'       => __('Your Email is already in our system.', 'cbd')
                );
            } else:
            $output = array(
                'status'    => 'error',
                'msg'       => __('The Email address is invalid.', 'cbd')
            );
        endif;
    else:
        $output = array(
            'status'    => 'error',
            'msg'       => __('An Error occurred. Please try again later.', 'cbd')
        );
    endif;
    wp_send_json($output);
}
add_action('wp_ajax_nopriv_ajax_subscribe', 'tnp_ajax_subscribe');
add_action('wp_ajax_ajax_subscribe', 'tnp_ajax_subscribe');

/**
 * Load More Posts
 */
function load_more_posts() { ?>
    <?php
        $posts_per_page = get_option('posts_per_page');
        $featured_post = get_field('featured_post', get_option('page_for_posts'));
        $paged = ($_POST['paged']) ? $_POST['paged'] : 1;
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => $posts_per_page,
            'paged' => $paged,
        );
        if($featured_post) $args['post__not_in'] = array($featured_post);
        $wp_query = new WP_Query($args);
    ?>
    <?php if($wp_query->have_posts()): ?>
        <?php $i = 1; while($wp_query->have_posts()):$wp_query->the_post(); ?>
            <div class="<?php echo ($i <= 6) ? 'col-md-4' : 'col-md-6'; ?> mb-5">
                <?php get_template_part('templates/blocks/posts/post'); ?>
            </div>
        <?php $i++; endwhile; ?>
    <?php endif; ?>
    <?php die();
}
add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');
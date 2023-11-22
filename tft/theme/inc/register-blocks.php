<?php
function custom_block_category($categories, $post) {
    $custom_block = array(
        'slug' => 'custom-blocks',
        'title' => __('Custom Blocks', 'custom-blocks')
    );
	$categories_sorted = array();
    $categories_sorted[0] = $custom_block;
    foreach ($categories as $category) {
        $categories_sorted[] = $category;
    }
    return $categories_sorted;
}
add_filter('block_categories', 'custom_block_category', 10, 2);

function register_acf_block_types() {

    // Cards
    acf_register_block_type(array(
        'name'              => 'cards',
        'title'             => __('Cards'),
        'render_template'   => 'templates/blocks/cards/cards.php',
        'category'          => 'custom-blocks',
        'icon'              => 'admin-page',
        'mode'              => 'edit',
    ));

    // Center Text
    acf_register_block_type(array(
        'name'              => 'center-text',
        'title'             => __('Center Text'),
        'render_template'   => 'templates/blocks/content/center-text.php',
        'category'          => 'custom-blocks',
        'icon'              => 'text',
        'mode'              => 'edit',
    ));

    // Comparison
    acf_register_block_type(array(
        'name'              => 'comparison',
        'title'             => __('Comparison'),
        'render_template'   => 'templates/blocks/comparison/comparison.php',
        'category'          => 'custom-blocks',
        'icon'              => 'admin-settings',
        'mode'              => 'edit',
    ));

    // Competitions
    acf_register_block_type(array(
        'name'              => 'competitions',
        'title'             => __('Competitions'),
        'render_template'   => 'templates/blocks/competitions/competitions.php',
        'category'          => 'custom-blocks',
        'icon'              => 'awards',
        'mode'              => 'edit',
    ));

    // Contact
    acf_register_block_type(array(
        'name'              => 'contact',
        'title'             => __('Contact'),
        'render_template'   => 'templates/blocks/contact/contact.php',
        'category'          => 'custom-blocks',
        'icon'              => '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="id-card" class="svg-inline--fa fa-id-card fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M528 32H48C21.5 32 0 53.5 0 80v16h576V80c0-26.5-21.5-48-48-48zM0 432c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V128H0v304zm352-232c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16zm0 64c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16zm0 64c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16zM176 192c35.3 0 64 28.7 64 64s-28.7 64-64 64-64-28.7-64-64 28.7-64 64-64zM67.1 396.2C75.5 370.5 99.6 352 128 352h8.2c12.3 5.1 25.7 8 39.8 8s27.6-2.9 39.8-8h8.2c28.4 0 52.5 18.5 60.9 44.2 3.2 9.9-5.2 19.8-15.6 19.8H82.7c-10.4 0-18.8-10-15.6-19.8z"></path></svg>',
        'mode'              => 'edit',
    ));

    // Contact Banner
    acf_register_block_type(array(
        'name'              => 'contact-banner',
        'title'             => __('Contact Banner'),
        'render_template'   => 'templates/blocks/contact/contact-banner.php',
        'category'          => 'custom-blocks',
        'icon'              => '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="id-card" class="svg-inline--fa fa-id-card fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M528 32H48C21.5 32 0 53.5 0 80v16h576V80c0-26.5-21.5-48-48-48zM0 432c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V128H0v304zm352-232c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16zm0 64c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16zm0 64c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16zM176 192c35.3 0 64 28.7 64 64s-28.7 64-64 64-64-28.7-64-64 28.7-64 64-64zM67.1 396.2C75.5 370.5 99.6 352 128 352h8.2c12.3 5.1 25.7 8 39.8 8s27.6-2.9 39.8-8h8.2c28.4 0 52.5 18.5 60.9 44.2 3.2 9.9-5.2 19.8-15.6 19.8H82.7c-10.4 0-18.8-10-15.6-19.8z"></path></svg>',
        'mode'              => 'edit',
    ));

    // Contact Info
    acf_register_block_type(array(
        'name'              => 'contact-info',
        'title'             => __('Contact Info'),
        'render_template'   => 'templates/blocks/contact/contact-info.php',
        'category'          => 'custom-blocks',
        'icon'              => '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="id-card" class="svg-inline--fa fa-id-card fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M528 32H48C21.5 32 0 53.5 0 80v16h576V80c0-26.5-21.5-48-48-48zM0 432c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V128H0v304zm352-232c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16zm0 64c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16zm0 64c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16zM176 192c35.3 0 64 28.7 64 64s-28.7 64-64 64-64-28.7-64-64 28.7-64 64-64zM67.1 396.2C75.5 370.5 99.6 352 128 352h8.2c12.3 5.1 25.7 8 39.8 8s27.6-2.9 39.8-8h8.2c28.4 0 52.5 18.5 60.9 44.2 3.2 9.9-5.2 19.8-15.6 19.8H82.7c-10.4 0-18.8-10-15.6-19.8z"></path></svg>',
        'mode'              => 'edit',
    ));

    // Discord
    acf_register_block_type(array(
        'name'              => 'discord',
        'title'             => __('Discord'),
        'render_template'   => 'templates/blocks/discord/discord.php',
        'category'          => 'custom-blocks',
        'icon'              => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 640 512"><path d="M524.531,69.836a1.5,1.5,0,0,0-.764-.7A485.065,485.065,0,0,0,404.081,32.03a1.816,1.816,0,0,0-1.923.91,337.461,337.461,0,0,0-14.9,30.6,447.848,447.848,0,0,0-134.426,0,309.541,309.541,0,0,0-15.135-30.6,1.89,1.89,0,0,0-1.924-.91A483.689,483.689,0,0,0,116.085,69.137a1.712,1.712,0,0,0-.788.676C39.068,183.651,18.186,294.69,28.43,404.354a2.016,2.016,0,0,0,.765,1.375A487.666,487.666,0,0,0,176.02,479.918a1.9,1.9,0,0,0,2.063-.676A348.2,348.2,0,0,0,208.12,430.4a1.86,1.86,0,0,0-1.019-2.588,321.173,321.173,0,0,1-45.868-21.853,1.885,1.885,0,0,1-.185-3.126c3.082-2.309,6.166-4.711,9.109-7.137a1.819,1.819,0,0,1,1.9-.256c96.229,43.917,200.41,43.917,295.5,0a1.812,1.812,0,0,1,1.924.233c2.944,2.426,6.027,4.851,9.132,7.16a1.884,1.884,0,0,1-.162,3.126,301.407,301.407,0,0,1-45.89,21.83,1.875,1.875,0,0,0-1,2.611,391.055,391.055,0,0,0,30.014,48.815,1.864,1.864,0,0,0,2.063.7A486.048,486.048,0,0,0,610.7,405.729a1.882,1.882,0,0,0,.765-1.352C623.729,277.594,590.933,167.465,524.531,69.836ZM222.491,337.58c-28.972,0-52.844-26.587-52.844-59.239S193.056,219.1,222.491,219.1c29.665,0,53.306,26.82,52.843,59.239C275.334,310.993,251.924,337.58,222.491,337.58Zm195.38,0c-28.971,0-52.843-26.587-52.843-59.239S388.437,219.1,417.871,219.1c29.667,0,53.307,26.82,52.844,59.239C470.715,310.993,447.538,337.58,417.871,337.58Z"></path></svg>',
        'mode'              => 'edit',
    ));

    // FAQ
    acf_register_block_type(array(
        'name'              => 'faq',
        'title'             => __('FAQ'),
        'render_template'   => 'templates/blocks/faq/faq.php',
        'category'          => 'custom-blocks',
        'icon'              => 'editor-help',
        'mode'              => 'edit',
    ));

    // Form
    acf_register_block_type(array(
        'name'              => 'form',
        'title'             => __('Form'),
        'render_template'   => 'templates/blocks/form/form.php',
        'category'          => 'custom-blocks',
        'icon'              => 'feedback',
        'mode'              => 'edit',
    ));

    // Hero Home
    acf_register_block_type(array(
        'name'              => 'hero-home',
        'title'             => __('Hero Home'),
        'render_template'   => 'templates/blocks/hero/hero-home.php',
        'category'          => 'custom-blocks',
        'icon'              => '<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="image" class="svg-inline--fa fa-image fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm-6 336H54a6 6 0 0 1-6-6V118a6 6 0 0 1 6-6h404a6 6 0 0 1 6 6v276a6 6 0 0 1-6 6zM128 152c-22.091 0-40 17.909-40 40s17.909 40 40 40 40-17.909 40-40-17.909-40-40-40zM96 352h320v-80l-87.515-87.515c-4.686-4.686-12.284-4.686-16.971 0L192 304l-39.515-39.515c-4.686-4.686-12.284-4.686-16.971 0L96 304v48z"></path></svg>',
        'mode'              => 'edit',
    ));

    // Hero
    acf_register_block_type(array(
        'name'              => 'hero',
        'title'             => __('Hero'),
        'render_template'   => 'templates/blocks/hero/hero.php',
        'category'          => 'custom-blocks',
        'icon'              => '<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="image" class="svg-inline--fa fa-image fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm-6 336H54a6 6 0 0 1-6-6V118a6 6 0 0 1 6-6h404a6 6 0 0 1 6 6v276a6 6 0 0 1-6 6zM128 152c-22.091 0-40 17.909-40 40s17.909 40 40 40 40-17.909 40-40-17.909-40-40-40zM96 352h320v-80l-87.515-87.515c-4.686-4.686-12.284-4.686-16.971 0L192 304l-39.515-39.515c-4.686-4.686-12.284-4.686-16.971 0L96 304v48z"></path></svg>',
        'mode'              => 'edit',
    ));

    // Image & Text
    acf_register_block_type(array(
        'name'              => 'image-text',
        'title'             => __('Image & Text'),
        'render_template'   => 'templates/blocks/content/image-text.php',
        'category'          => 'custom-blocks',
        'icon'              => '<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="img" aria-hidden="true" focusable="false"><path d="M3 18h8V6H3v12zM14 7.5V9h7V7.5h-7zm0 5.3h7v-1.5h-7v1.5zm0 3.7h7V15h-7v1.5z"></path></svg>',
        'mode'              => 'edit',
    ));

    // Leaderboard
    acf_register_block_type(array(
        'name'              => 'leaderboard',
        'title'             => __('Leaderboard'),
        'render_template'   => 'templates/blocks/leaderboard/leaderboard.php',
        'category'          => 'custom-blocks',
        'icon'              => 'editor-table',
        'mode'              => 'edit',
    ));

    // Media
    acf_register_block_type(array(
        'name'              => 'media',
        'title'             => __('Media'),
        'render_template'   => 'templates/blocks/media/media.php',
        'category'          => 'custom-blocks',
        'icon'              => 'video-alt3',
        'mode'              => 'edit',
    ));

    // Payout
    acf_register_block_type(array(
        'name'              => 'payout',
        'title'             => __('Payout'),
        'render_template'   => 'templates/blocks/payout/payout.php',
        'category'          => 'custom-blocks',
        'icon'              => 'money-alt',
        'mode'              => 'edit',
    ));

    // Platforms
    acf_register_block_type(array(
        'name'              => 'platforms',
        'title'             => __('Platforms'),
        'render_template'   => 'templates/blocks/platforms/platforms.php',
        'category'          => 'custom-blocks',
        'icon'              => 'image-filter',
        'mode'              => 'edit',
    ));

    // Process
    acf_register_block_type(array(
        'name'              => 'process',
        'title'             => __('Process'),
        'render_template'   => 'templates/blocks/process/process.php',
        'category'          => 'custom-blocks',
        'icon'              => 'admin-generic',
        'mode'              => 'edit',
    ));

    // Product
    acf_register_block_type(array(
        'name'              => 'product',
        'title'             => __('Product'),
        'render_template'   => 'templates/blocks/product/product.php',
        'category'          => 'custom-blocks',
        'icon'              => 'archive',
        'mode'              => 'edit',
    ));

    // Reviews
    acf_register_block_type(array(
        'name'              => 'reviews',
        'title'             => __('Reviews'),
        'render_template'   => 'templates/blocks/reviews/reviews.php',
        'category'          => 'custom-blocks',
        'icon'              => 'format-quote',
        'mode'              => 'edit',
    ));

    // Text
    acf_register_block_type(array(
        'name'              => 'text',
        'title'             => __('Text'),
        'render_template'   => 'templates/blocks/content/text.php',
        'category'          => 'custom-blocks',
        'icon'              => 'text',
        'mode'              => 'edit',
    ));

    // Video & Text
    acf_register_block_type(array(
        'name'              => 'video-text',
        'title'             => __('Video & Text'),
        'render_template'   => 'templates/blocks/content/video-text.php',
        'category'          => 'custom-blocks',
        'icon'              => '<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="img" aria-hidden="true" focusable="false"><path d="M3 18h8V6H3v12zM14 7.5V9h7V7.5h-7zm0 5.3h7v-1.5h-7v1.5zm0 3.7h7V15h-7v1.5z"></path></svg>',
        'mode'              => 'edit',
    ));
	acf_register_block_type(array(
        'name'              => 'team',
        'title'             => __('Our Team'),
        'render_template'   => 'templates/blocks/team/team.php',
        'category'          => 'custom-blocks',
        'icon'              => '<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="img" aria-hidden="true" focusable="false"><path d="M3 18h8V6H3v12zM14 7.5V9h7V7.5h-7zm0 5.3h7v-1.5h-7v1.5zm0 3.7h7V15h-7v1.5z"></path></svg>',
        'mode'              => 'edit',
    ));
	acf_register_block_type(array(
        'name'              => 'our-mission',
        'title'             => __('Our Mission'),
        'render_template'   => 'templates/blocks/mission/mission.php',
        'category'          => 'custom-blocks',
        'icon'              => '<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="img" aria-hidden="true" focusable="false"><path d="M3 18h8V6H3v12zM14 7.5V9h7V7.5h-7zm0 5.3h7v-1.5h-7v1.5zm0 3.7h7V15h-7v1.5z"></path></svg>',
        'mode'              => 'edit',
    ));
	acf_register_block_type(array(
        'name'              => 'action-points',
        'title'             => __('Action Points'),
        'render_template'   => 'templates/blocks/points/action-points.php',
        'category'          => 'custom-blocks',
        'icon'              => '<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="img" aria-hidden="true" focusable="false"><path d="M3 18h8V6H3v12zM14 7.5V9h7V7.5h-7zm0 5.3h7v-1.5h-7v1.5zm0 3.7h7V15h-7v1.5z"></path></svg>',
        'mode'              => 'edit',
    ));

	// Symbols hero
	acf_register_block_type(array(
		'name'              => 'symbols-hero',
		'title'             => __('Symbols hero'),
		'render_template'   => 'templates/blocks/symbols/hero.php',
		'category'          => 'custom-blocks',
		'icon'              => '<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="img" aria-hidden="true" focusable="false"><path d="M3 18h8V6H3v12zM14 7.5V9h7V7.5h-7zm0 5.3h7v-1.5h-7v1.5zm0 3.7h7V15h-7v1.5z"></path></svg>',
		'mode'              => 'edit',
	));

	// Symbols table
	acf_register_block_type(array(
		'name'              => 'symbols-table',
		'title'             => __('Symbols table'),
		'render_template'   => 'templates/blocks/symbols/table/index.php',
		'category'          => 'custom-blocks',
		'icon'              => '<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="img" aria-hidden="true" focusable="false"><path d="M3 18h8V6H3v12zM14 7.5V9h7V7.5h-7zm0 5.3h7v-1.5h-7v1.5zm0 3.7h7V15h-7v1.5z"></path></svg>',
		'mode'              => 'edit',
	));

	// Symbols specs
	acf_register_block_type(array(
		'name'              => 'symbols-specs',
		'title'             => __('Symbols specs'),
		'render_template'   => 'templates/blocks/symbols/specification/index.php',
		'category'          => 'custom-blocks',
		'icon'              => '<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="img" aria-hidden="true" focusable="false"><path d="M3 18h8V6H3v12zM14 7.5V9h7V7.5h-7zm0 5.3h7v-1.5h-7v1.5zm0 3.7h7V15h-7v1.5z"></path></svg>',
		'mode'              => 'edit',
	));

	// Symbols footer
	acf_register_block_type(array(
		'name'              => 'symbols-footer',
		'title'             => __('Symbols footer'),
		'render_template'   => 'templates/blocks/symbols/footer.php',
		'category'          => 'custom-blocks',
		'icon'              => '<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="img" aria-hidden="true" focusable="false"><path d="M3 18h8V6H3v12zM14 7.5V9h7V7.5h-7zm0 5.3h7v-1.5h-7v1.5zm0 3.7h7V15h-7v1.5z"></path></svg>',
		'mode'              => 'edit',
	));

}

if(function_exists('acf_register_block_type')) {
    add_action('acf/init', 'register_acf_block_types');
}

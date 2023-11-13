<?php

/**
 * Plugin Name: Playlist Videos
 * Author: Hasnain Aslam
 * Description: Playlist video plugin contain youtube apis to get your vidoes form youtube and show on website.
 * Version: 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

$plugin_link = plugin_dir_url(__FILE__);

define( 'PLUGINLINK', $plugin_link );
define( 'PLUGINPATH', __DIR__ );

require  PLUGINPATH . '/includes/settings.php';
require  PLUGINPATH . '/includes/function.php';

function playlist_videos_script() {
    wp_enqueue_script( 'my-script', plugins_url( 'assets/js/script.min.js?v=0.0.2', __FILE__ ) );
}

add_action( 'wp_enqueue_scripts','playlist_videos_script'); 

function playlist_videos_style() {
    wp_register_style('mystyle-css', plugins_url('assets/css/style.min.css',__FILE__ ));
    wp_enqueue_style('my-style', plugins_url('assets/css/style.min.css',__FILE__ ));
}

add_action( 'wp_enqueue_scripts','playlist_videos_style');
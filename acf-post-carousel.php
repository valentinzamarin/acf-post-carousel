<?php
/*
Plugin Name: ACF Post Carousel
Plugin URI: https://github.com/valentinzamarin/acf-post-carousel
Description: Плагин для ACF Pro, позволяющий вставлять карусель внутри контента.
Version: 1.0
Author: Valentin Zamarin
*/

defined( 'ABSPATH' ) || exit;

require_once( ABSPATH . '/wp-admin/includes/plugin.php' ) ;
if ( !is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
    return false;
}

if ( ! defined( 'CAROUSEL_PATH' ) ) {
    define( 'CAROUSEL_PATH', __FILE__ );
}

if ( ! defined( 'CAROUSEL_URL' ) ) {
    define( 'CAROUSEL_URL', plugin_dir_url( __FILE__ ) );
}

//include main class
if ( ! class_exists( 'PostCarousel', false ) ) {
    include_once dirname( CAROUSEL_PATH ) . '/inc/PostCarousel.php';
}


function run() {
    $plugin = new PostCarousel();
}
run();
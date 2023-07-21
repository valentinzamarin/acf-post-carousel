<?php

defined( 'ABSPATH' ) || exit;

class PostCarousel{
    public function __construct() {
        $this->load_backend_dependencies();
        $this->load_frontend_dependencies();
    }

    public function load_backend_dependencies() {
        require_once dirname( CAROUSEL_PATH ) . '/inc/backend/CarouserFields.php';

        $fields = new CarouserFields();
        add_action( 'init', [ $fields, 'register_carousel_fields' ] );
    }
    public function load_frontend_dependencies() {

        require_once dirname( CAROUSEL_PATH ) . '/inc/frontend/EnqueueScript.php';
        require_once dirname( CAROUSEL_PATH ) . '/inc/frontend/Shortcode.php';

        $scripts   = new EnqueueScript();
        $shortcode = new Shortcode();

        add_action('wp_enqueue_scripts', [ $scripts, 'carousel_scripts' ] );
        add_shortcode( 'post_gallery', [ $shortcode, 'shortcode_callback' ] );
    }
}
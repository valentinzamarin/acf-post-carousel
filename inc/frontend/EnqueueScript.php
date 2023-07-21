<?php

defined( 'ABSPATH' ) || exit;

class EnqueueScript{
    public function carousel_scripts() {
        $time = time();
        if ( is_single() && 'post' == get_post_type() ) {
            wp_enqueue_style( 'fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css', [], $time );
            wp_enqueue_style( 'carousel', CAROUSEL_URL . '/assets/styles/carousel.css', [], $time );

            wp_enqueue_script('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', ['jquery'], $time, true);
            wp_enqueue_script('carousel', CAROUSEL_URL . '/assets/js/carousel.js', ['jquery'], $time, true);
        }
    }
}
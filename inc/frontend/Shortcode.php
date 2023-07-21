<?php

defined( 'ABSPATH' ) || exit;

class Shortcode{
    public function shortcode_callback() {
        ob_start();
        $images = get_field('post_carousel');
        if( $images ): ?>
            <div class="post-gallery carousel" id="gallery">
                <?php foreach ($images as $item) : ?>
                    <div class="post-gallery__item carousel__slide">
                        <a data-fancybox="gallery" class="post-gallery__link" href="<?php echo esc_url( $item['url'] ); ?>" >
                            <img src="<?php echo esc_url($item['sizes']['medium']); ?>" alt="">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif;
        return ob_get_clean();
    }
}
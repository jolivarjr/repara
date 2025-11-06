<?php
function mj_load_js(): void
{
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), 1, true);
    wp_enqueue_script('bootstrap', MJ_TEMPLATE_URL . '/assets/js/bootstrap.min.js', array('jquery'), 1, true);
    wp_enqueue_script('owl-carousel', MJ_TEMPLATE_URL . '/assets/js/owl.carousel.min.js', array('jquery'), 1, true);
    wp_enqueue_script('aos-js', MJ_TEMPLATE_URL . '/assets/js/aos.min.js', [], '2.3.1', true);
    wp_enqueue_script('swiper-js', MJ_TEMPLATE_URL . '/assets/js/swiper.min.js', [], '8.4.7', true);
    wp_enqueue_script('common_theme', MJ_TEMPLATE_URL . '/assets/js/common.js', array('jquery'), 2, true);
    wp_enqueue_script('view_theme', MJ_TEMPLATE_URL . '/assets/js/visualizador-imagens.js', array('jquery'), 2, true);
}

add_action('wp_enqueue_scripts', 'mj_load_js');

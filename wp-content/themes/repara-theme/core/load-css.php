<?php

// FRONT-END CSS
function mj_load_css(): void
{
    wp_enqueue_style('bootstrap-padrao', MJ_TEMPLATE_URL . '/assets/css/bootstrap.min.css');
//    wp_enqueue_style('fontawesome', MJ_TEMPLATE_URL . '/assets/css/fontawesome.css');
    wp_enqueue_style('owlcss', MJ_TEMPLATE_URL . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style('aos-css', MJ_TEMPLATE_URL . '/assets/css/aos.min.css', [], '2.3.1');

    // Fonte
    wp_enqueue_style(
        'mj-fonts-roboto',
        MJ_TEMPLATE_URL . '/assets/fonts/roboto/stylesheet.css',
        [],
        null
    );

    // CSS base
    wp_enqueue_style('style-base', MJ_TEMPLATE_URL . '/assets/css/style.css', [], null);    // CSS para desktop grande
    wp_enqueue_style('style-1366', MJ_TEMPLATE_URL . '/assets/css/style-1366.css', ['style-base'], null);    // CSS mobile com media query
    wp_enqueue_style('style-mobile', MJ_TEMPLATE_URL . '/assets/css/style-mobile.css', ['style-base'], null, 'screen and (max-width: 1080px)');

    wp_enqueue_style('view_theme', MJ_TEMPLATE_URL . '/assets/css/visualizador-imagens.css');
}

add_action('wp_enqueue_scripts', 'mj_load_css');

// BACK-END CSS
function mj_load_admin_css(): void
{
    wp_enqueue_style('mj_style_admin', MJ_TEMPLATE_URL . '/assets/css/style-admin.css', [], '1.0');
}

add_action('admin_enqueue_scripts', 'mj_load_admin_css');

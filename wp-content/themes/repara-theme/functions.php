<?php

// defer css e js
add_filter('style_loader_tag', function ($html, $handle) {

    // nomes dos estilos que você quer "desbloquear"
    $defer_styles = [
        'bootstrap-padrao',
        'fontawesome',
        'owlcss',
        'aos-css',
        'swiper-css',

        'style-base',
        'style-1366',
        'style-mobile',

        'view_theme'
    ];

    if (in_array($handle, $defer_styles)) {

        // transforma o link em preload + ativa depois
        $html = str_replace("rel='stylesheet'", "rel='preload' as='style' onload=\"this.rel='stylesheet'\"", $html);
    }

    return $html;

}, 10, 2);

add_action('wp_enqueue_scripts', function () {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
}, 100);

add_action('wp_enqueue_scripts', function () {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', includes_url('/js/jquery/jquery.min.js'), [], null, true);
        wp_enqueue_script('jquery');
    }
}, 100);

add_filter('wp_default_scripts', function ($scripts) {
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $scripts->registered['jquery']->deps = [];
    }
});


// desabilita editor de tema
const DISALLOW_FILE_EDIT = true;

// desabilita barra de admin do wordpress
add_filter('show_admin_bar', '__return_false');

// setup do tema
add_action('after_setup_theme', 'mj_settings_theme');
function mj_settings_theme(): void
{
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

    // tamanhos personalizados de imagens
    // add_image_size('loop_blog_thumbnail', '350', '280', true);

    // registrando menus
    register_nav_menu('header', 'Header');
    register_nav_menu('footer', 'Footer');
}

// funções genericas para agilizar o desenvolvimento
require_once 'core/index.php';

// aqui são carregadas as funções que recebem dados enviados via ajax
require_once 'ajax/index.php';

// funções para personalizar a parte administrativa do wordpress
require_once 'admin-custom/index.php';

// carrega os custom posts types
require_once 'custom-posts/index.php';

// carrega as funções de shortcodes 
require_once 'shortcodes/index.php';

// Campos de configurações gerais do tema
if (is_admin()) {
    $mj_theme_options = new MJConfigThemeOptions();

    $mj_theme_options->add_custom_field('input', 'Telefone', [
        'atributos' => [
            'name' => 'telefone_site'
        ]
    ]);
    $mj_theme_options->add_custom_field('input', 'E-mail de Contato', [
        'atributos' => [
            'name' => 'email_site'
        ]
    ]);
    $mj_theme_options->add_custom_field('input', 'Instagram', [
        'atributos' => [
            'name' => 'instagram_site'
        ]
    ]);
    $mj_theme_options->add_custom_field('input', 'Link Instagram', [
        'atributos' => [
            'name' => 'instagram_site_link'
        ]
    ]);
    $mj_theme_options->add_custom_field('input', 'Linkedin  ', [
        'atributos' => [
            'name' => 'linkedin_site'
        ]
    ]);
    $mj_theme_options->add_custom_field('input', 'Link Linkedin  ', [
        'atributos' => [
            'name' => 'linkedin_site_link'
        ]
    ]);
    $mj_theme_options->add_custom_field('input', 'Google  ', [
        'atributos' => [
            'name' => 'google_site'
        ]
    ]);
    $mj_theme_options->add_custom_field('input', 'Link Google  ', [
        'atributos' => [
            'name' => 'google_site_link'
        ]
    ]);
    $mj_theme_options->add_custom_field('input', 'Link Entre em Contato', [
        'atributos' => [
            'name' => 'link_contato'
        ]
    ]);
    $mj_theme_options->add_custom_field('input', 'Link Política de Privacidade', [
        'atributos' => [
            'name' => 'link_politica'
        ]
    ]);
}


/**
 * Abaixo Código padrão do tema e customizações
 */

// registrando sidebars
//add_action('widgets_init', 'mj_register_my_widgets_theme');
//function mj_register_my_widgets_theme()
//{
//    // 1 coluna rodapé
//    register_sidebar(array(
//        'name' => 'Primeira Coluna Rodapé',
//        'id' => 'footer-primeira-coluna',
//        'description' => 'Primeira coluna do rodapé do site'
//    ));
//    // 2 coluna rodapé
//    register_sidebar(array(
//        'name' => 'Segunda Coluna Rodapé',
//        'id' => 'footer-segunda-coluna',
//        'description' => 'Segunda coluna do rodapé do site'
//    ));
//    // 3 coluna rodapé
//    register_sidebar(array(
//        'name' => 'Terceira Coluna Rodapé',
//        'id' => 'footer-terceira-coluna',
//        'description' => 'Terceira coluna do rodapé do site'
//    ));
//
//    // coluna sidebar para blog do site
//    register_sidebar(array(
//        'name' => 'Barra Lateral do Blog',
//        'id' => 'blog-sidebar',
//        'description' => 'Barra Lateral do Blog'
//    ));
//}

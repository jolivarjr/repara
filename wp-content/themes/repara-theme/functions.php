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
}
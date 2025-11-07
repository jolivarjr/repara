<?php

// post-types que devem ter galeria
$POST_TYPES_WITH_GALLERY = ['sliders', 'galerias','politicas_pv']; // ex: 'servicos','banners'

// remove Notícias/Posts padrão do wordpress
require 'remove-posts-padrao.php';

require 'slider.php';

require 'galeria.php';

require 'politicas_privacidade.php';

// adiciona javascript do editor de galeria em custom post types
if (!empty($POST_TYPES_WITH_GALLERY)) {

    function mj_load_admin_js_galeria(): void
    {
        global $pagenow, $typenow, $POST_TYPES_WITH_GALLERY;
        if (($pagenow == 'post.php' || $pagenow == 'post-new.php') && in_array($typenow, $POST_TYPES_WITH_GALLERY)) {
            wp_enqueue_media();
            wp_enqueue_script('mj-admin-gallery', MJ_TEMPLATE_URL . '/assets/js/admin-gallery.js', array('jquery'), '1.0', true);
        }
    }

    add_action('admin_enqueue_scripts', 'mj_load_admin_js_galeria');
}

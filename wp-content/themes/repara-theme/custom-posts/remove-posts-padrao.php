<?php

function desativar_funcionalidades_posts(): void
{
    // Remove do menu admin
    remove_menu_page('edit.php');

    // Remove da barra admin
    remove_action('admin_bar_menu', 'wp_admin_bar_new_content_menu', 70);

    // Remove widgets relacionados ao dashboard
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');

    // Redireciona tentativas de acesso
    global $pagenow;
    if ($pagenow == 'edit.php' && !isset($_GET['post_type'])) {
        wp_redirect(admin_url());
        exit;
    }
}
add_action('admin_menu', 'desativar_funcionalidades_posts');
add_action('admin_init', 'desativar_funcionalidades_posts');

// Remove da REST API
function remover_posts_rest_api($endpoints) {
    if (isset($endpoints['/wp/v2/posts'])) {
        unset($endpoints['/wp/v2/posts']);
    }
    if (isset($endpoints['/wp/v2/posts/(?P<id>[\d]+)'])) {
        unset($endpoints['/wp/v2/posts/(?P<id>[\d]+)']);
    }
    return $endpoints;
}
add_filter('rest_endpoints', 'remover_posts_rest_api');
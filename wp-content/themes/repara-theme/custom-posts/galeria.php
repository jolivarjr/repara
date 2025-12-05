<?php

$register_slider = new MJRegisterCustomPostType(
    'galerias',
    'Galeria',
    'a',
    ['menu_icon' => 'dashicons-images-alt2', 'supports' => ['title']],
    [],
    'Galeria'
);

$slider_metaboxs = new MJRegisterMetaBox('galeria_campos', 'Campos', ['galerias']);

$slider_metaboxs->add_field_form('file_upload', [
    'label' => 'Imagens:',
    'multiple' => true,
    'atributos' => [
        'name' => 'imagens',
    ]
]);


// Remove o botão "Adicionar Novo"
//function remover_botao_adicionar(): void
//{
//    global $submenu;
//    unset($submenu['edit.php?post_type=galerias'][10]); // Remove submenu "Adicionar Novo"
//}
//add_action('admin_menu', 'remover_botao_adicionar');

// Oculta o botão "Adicionar nova galeria" na página de listagem
//function ocultar_botao_adicionar_nova_galeria(): void
//{
//    global $typenow;
//    if ($typenow === 'galerias') {
//        echo '<style>
//            .page-title-action { display: none !important; }
//        </style>';
//    }
//}
//add_action('admin_head', 'ocultar_botao_adicionar_nova_galeria');

// Redireciona para a primeira galeria ao acessar a listagem
//function redirecionar_para_primeira_galeria(): void
//{
//    global $pagenow, $typenow;
//
//    // Verifica se está na página de listagem de galerias
//    if ($pagenow === 'edit.php' && $typenow === 'galerias') {
//        // Busca a primeira galeria
//        $galerias = get_posts([
//            'post_type' => 'galerias',
//            'posts_per_page' => 1,
//            'post_status' => 'any',
//            'orderby' => 'date',
//            'order' => 'DESC'
//        ]);
//
//        // Se encontrou uma galeria, redireciona para edição
//        if (!empty($galerias)) {
//            $primeira_galeria_id = $galerias[0]->ID;
//            wp_redirect(admin_url('post.php?post=' . $primeira_galeria_id . '&action=edit'));
//            exit;
//        }
//    }
//}
//add_action('admin_init', 'redirecionar_para_primeira_galeria');

// Bloqueia exclusão
//function bloquear_exclusao($caps, $cap, $user_id, $args) {
//    if ($cap === 'delete_post' && isset($args[0])) {
//        $post = get_post($args[0]);
//        if ($post && $post->post_type === 'galerias') {
//            return array('do_not_allow');
//        }
//    }
//    return $caps;
//}
//add_filter('map_meta_cap', 'bloquear_exclusao', 10, 4);

// Remove edição do slug
function remover_edicao_slug(): void
{
    global $post;
    if ($post && $post->post_type === 'galerias') {
        echo '<style>#edit-slug-box { display: none; }</style>';
    }
}
add_action('admin_head', 'remover_edicao_slug');
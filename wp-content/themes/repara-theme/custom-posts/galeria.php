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
function remover_botao_adicionar(): void
{
    global $submenu;
    unset($submenu['edit.php?post_type=galerias'][10]); // Remove submenu "Adicionar Novo"
}
add_action('admin_menu', 'remover_botao_adicionar');

// Bloqueia exclusão
function bloquear_exclusao($caps, $cap, $user_id, $args) {
    if ($cap === 'delete_post' && isset($args[0])) {
        $post = get_post($args[0]);
        if ($post && $post->post_type === 'galerias') {
            return array('do_not_allow');
        }
    }
    return $caps;
}
add_filter('map_meta_cap', 'bloquear_exclusao', 10, 4);

// Remove edição do slug
// Remove a edição do slug no admin
function remover_edicao_slug(): void
{
    global $post;
    if ($post && $post->post_type === 'galerias') {
        echo '<style>#edit-slug-box { display: none; }</style>';
    }
}
add_action('admin_head', 'remover_edicao_slug');
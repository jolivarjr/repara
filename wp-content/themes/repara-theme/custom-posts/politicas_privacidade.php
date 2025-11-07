<?php

$register_slider = new MJRegisterCustomPostType(
    'politicas_pv',
    'Política de Privacidade',
    'a',
    ['menu_icon' => 'dashicons-privacy', 'supports' => ['title', 'excerpt']],
    [],
    'Políticas de Privacidade'
);

$slider_metaboxs = new MJRegisterMetaBox('meta_arquivo', 'Arquivo', ['politicas_pv']);

$slider_metaboxs->add_field_form('file_upload', [
    'label' => '',
    'multiple' => false,
    'file_type' => 'application',
    'label_bt_singular' => 'Carregar Arquivo',
    'atributos' => [
        'name' => 'arquivo',
    ]
]);

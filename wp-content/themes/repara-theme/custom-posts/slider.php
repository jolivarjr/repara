<?php

$register_slider = new MJRegisterCustomPostType(
    'sliders',
    'Banner',
    'o',
    ['menu_icon' => 'dashicons-images-alt2', 'supports' => ['title', 'thumbnail']],
    [],
    'Banners'
);

$slider_metaboxs = new MJRegisterMetaBox('slideroptions', 'Opções do Slider', ['sliders']);

$slider_metaboxs->add_field_form('file_upload', [
    'label' => 'Imagem Mobile:',
    'multiple' => false,
    'atributos' => [
        'name' => 'imagem_mobile',
    ]
]);

$slider_metaboxs->add_field_form('text', [
    'label' => 'Link',
    'atributos' => [
        'id' => 'link',
        'placeholder' => 'Digite uma url válida',
        'name' => 'link'
    ]
]);

$slider_metaboxs->add_field_form('text', [
    'label' => 'Texto do Botão',
    'atributos' => [
        'id' => 'banner_botao',
        'placeholder' => 'Digite um texto, ou deixe em branco se não quiser exibir o botão',
        'name' => 'banner_botao'
    ]
]);

$slider_metaboxs->add_field_form('checkbox', [
    'label' => 'Abrir em outra aba',
    'atributos' => [
        'id' => 'abrir_em_outra_aba',
        'name' => 'abrir_em_outra_aba'
    ]
]);

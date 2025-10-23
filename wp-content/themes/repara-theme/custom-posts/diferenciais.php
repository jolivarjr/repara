<?php

$register_slider = new MJRegisterCustomPostType(
    'diferenciais',
    'Diferencial',
    'o',
    [
        'menu_icon' => 'dashicons-admin-generic',
        'supports' => ['title', 'excerpt', 'thumbnail'],
    ],
    [],
    'Diferenciais'
);

<?php

$register_slider = new MJRegisterCustomPostType(
    'servicos',
    'Serviço',
    'o',
    ['menu_icon' => 'dashicons-admin-generic', 'supports' => ['title', 'excerpt', 'thumbnail']],
    [],
    'Serviços'
);

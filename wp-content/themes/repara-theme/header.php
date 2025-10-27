<?php
$custom_logo_id = get_theme_mod('custom_logo');
$logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
$logo = (!empty($logo_url)) ? "<img src='" . $logo_url . "' width='120' />" : ""
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>

    <meta name="format-detection" content="telephone=no">

    <script>
        window.MJ_TEMPLATE_URL = "<?= MJ_TEMPLATE_URL ?>"
        window.MJ_AJAX_URL = "<?= AJAX_URL ?>"
    </script>
</head>

<body>

<div id="page-loader">
    <div class="spinner"></div>
</div>

<header id="header-top-site">
    <div class="header-content">
        <?php
        the_custom_logo();
        ?>
        <?= mj_get_bootstrap_menu(null, [], $logo) ?>
    </div>
</header>

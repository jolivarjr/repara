<?php

add_action('wp_ajax_mj_load_more_gallery_images', 'mj_load_more_gallery_images');
add_action('wp_ajax_nopriv_mj_load_more_gallery_images', 'mj_load_more_gallery_images');

function mj_load_more_gallery_images()
{
    check_ajax_referer('gallery_nonce', 'nonce');

    $offset = isset($_POST['offset']) ? intval($_POST['offset']) : 0;
    $post_id = isset($_POST['post_id']) ? intval($_POST['post_id']) : 0;
    $posts_per_page = 9;

    if (!$post_id) {
        wp_send_json_error(['message' => 'Post ID não encontrado.']);
    }

    $image_ids_str = get_post_meta($post_id, 'imagens', true);

    if (empty($image_ids_str)) {
        wp_send_json_success(['html' => '', 'more' => false]);
        return;
    }

    $image_ids = explode(',', $image_ids_str);
    $total_images = count($image_ids);
    $images_to_load = array_slice($image_ids, $offset, $posts_per_page);

    ob_start();

    foreach ($images_to_load as $image_id) {
        $image_url = wp_get_attachment_image_url($image_id, 'large');
        if ($image_url) {
            ?>
            <div class="container_foto" data-aos="zoom-in">
                <img src="<?= esc_url($image_url) ?>" alt="" class="port_foto">
            </div>
            <?php
        }
    }

    $html = ob_get_clean();

    $more_available = ($offset + $posts_per_page) < $total_images;

    wp_send_json_success(['html' => $html, 'more' => $more_available]);
}
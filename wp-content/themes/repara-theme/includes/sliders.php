<div class="slider-content-home">
    <div class="owl-carousel">
        <?php $get_posts = get_posts(['posts_per_page' => -1, 'post_type' => 'sliders']); ?>
        <?php if ($get_posts) : ?>
            <?php foreach ($get_posts as $slider) : ?>
                <?php
                $link = get_post_meta($slider->ID, 'link', true);
                $abrir_em_outra_aba = get_post_meta($slider->ID, 'abrir_em_outra_aba', true);
                ?>
                <div class="slider-container">
                    <?php if ($link) : ?>
                    <a href="<?= $link ?>" title="<?= $slider->post_title ?>"
                       target="<?= ($abrir_em_outra_aba) ? '_blank' : '_self' ?>">
                        <?php endif; ?>

                        <?php if (!empty($slider->post_title)): ?>
                            <span class="slider-title"><?= $slider->post_title ?></span>
                        <?php endif; ?>

                        <?php
                        // Detecta se é dispositivo mobile
                        $is_mobile = wp_is_mobile();

                        if ($is_mobile) {
                            // Se for mobile, tenta usar as imagens específicas para mobile
                            $imagens_ids = get_post_meta($slider->ID, 'imagem_mobile', true);

                            if ($imagens_ids) {
                                $image_ids = explode(',', $imagens_ids);
                                $mobile_images_found = false;

                                foreach ($image_ids as $image_id) {
                                    $image_data = wp_get_attachment_image_src($image_id, 'medium_large');
                                    if ($image_data) {
                                        $image_url = $image_data[0];
                                        $mobile_images_found = true;
                                        ?>
                                        <img src="<?= $image_url ?>" alt="<?= $slider->post_title ?>">
                                        <?php
                                    }
                                }

                                // Se não encontrou nenhuma imagem mobile válida, usa o fallback
                                if (!$mobile_images_found) {
                                    echo get_the_post_thumbnail($slider->ID, 'full');
                                }
                            } else {
                                // Se não tem imagem_mobile definida, usa o fallback
                                echo get_the_post_thumbnail($slider->ID, 'full');
                            }
                        } else {
                            // Se não for mobile, sempre usa a imagem padrão
                            echo get_the_post_thumbnail($slider->ID, 'full');
                        }
                        ?>

                        <?php if ($link) : ?>
                    </a>
                <?php endif; ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
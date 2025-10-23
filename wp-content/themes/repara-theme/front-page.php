<!-- IN: front-page.php -->

<?php get_header(); ?>
<?php get_template_part('includes/sliders') ?>

<main>
    <section id="apresentacao">

    </section>

    <section id="sobre">

    </section>

    <section id="servicos">

    </section>

    <section id="diferenciais">

    </section>
</main>

<?php get_template_part('includes/footer-page'); ?>


<!--<div class="content-fixed">-->
<!--    --><?php //$get_posts_diferenciais = get_posts(['posts_per_page' => -1, 'post_type' => 'diferenciais', 'order' => 'Asc']); ?>
<!---->
<!--    --><?php //if ($get_posts_diferenciais) : ?>
<!--        --><?php //foreach ($get_posts_diferenciais as $diferencial) : ?>
<!--            <div class="diferencial-item">-->
<!--                <div class="icon-container" data-aos="fade-up">-->
<!--                    <img src="--><?php //= get_the_post_thumbnail_url($diferencial->ID, 'full') ?><!--" alt="">-->
<!--                </div>-->
<!---->
<!--                <div class="diferencial-text">-->
<!--                    <h3 data-aos="fade-right">--><?php //= $diferencial->post_title ?><!--</h3>-->
<!--                    <p data-aos="fade-left">--><?php //= $diferencial->post_excerpt ?><!--</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        --><?php //endforeach; ?>
<!--    --><?php //endif; ?>
<!---->
<!--</div>-->

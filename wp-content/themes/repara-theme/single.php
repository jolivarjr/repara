<!-- IN: single.php -->

<?php get_template_part('includes/header-page'); ?>

<style>
    .container-header-topo {
        text-align: center;
    }
</style>

<main id="single-blog" class="container">
    <div class="row">
        <div class="post">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>

                    <?php $thumbnail = get_the_post_thumbnail($post, 'full', ['title' => get_the_title(), 'alt' => get_the_title(), 'class' => 'img_single_post']); ?>

                    <!-- Verificando se existe uma imagem destacada -->
                    <?php if ($thumbnail) : ?>
                        <?= $thumbnail ?>
                    <?php endif; ?>

                    <?php the_title('<h1 class="single-title">', '</h1>') ?>

                    <?php the_content(); ?>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <!--		<div class="col-sm-4">-->
        <!--			<aside class="sidebar">-->
        <!--				--><?php //if (is_active_sidebar('blog-sidebar')) : ?>
        <!--				--><?php //dynamic_sidebar('blog-sidebar') ?>
        <!--				--><?php //endif; ?>
        <!--			</aside>-->
        <!--		</div>-->
    </div>
</main>

<?php get_template_part('includes/footer-page'); ?>
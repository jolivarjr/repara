<footer id="footer-site">
    <div class="content">

        <img class="logo" src="<?= MJ_TEMPLATE_URL . '/assets/imgs/logo-rodape.png' ?>" alt="">

        <div class="item">
            <img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/wpp-footer.png' ?>" alt="">
            <p><?= SITE_OPTIONS['telefone_site'] ?? '-' ?></p>
        </div>

        <div class="item">
            <img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/email-footer.png' ?>" alt="">
            <span><?= SITE_OPTIONS['email_site'] ?? '-' ?></span>
        </div>

        <p class="follow">Siga nossas redes sociais:</p>

        <div class="item">
            <img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/instagram-footer.png' ?>" alt="">
            <span><?= SITE_OPTIONS['instagram_site'] ?? '-' ?></span>
        </div>

        <div class="item">
            <img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/linkedin-footer.png' ?>" alt="">
            <span><?= SITE_OPTIONS['linkedin_site'] ?? '-' ?></span>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
<?php
// wp_nav_menu(
// 	array(
// 		'theme_location' => 'footer'
// 	)
// );
?>

<a href="#" id="back-top" class="text-white" title="Voltar para o topo"><i class="fas fa-arrow-up"></i></a>
</body>
</html>
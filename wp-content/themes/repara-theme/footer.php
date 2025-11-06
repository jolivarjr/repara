<footer id="footer-site">
    <div class="content">

        <img data-aos="zoom-in-up" class="logo" src="<?= MJ_TEMPLATE_URL . '/assets/imgs/logo-rodape.png' ?>" alt="">

        <div data-aos="fade-left" class="item">
            <img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/wpp-footer.png' ?>" alt="">
            <p><?= SITE_OPTIONS['telefone_site'] ?? '-' ?></p>
        </div>

        <div data-aos="fade-right" class="item">
            <img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/email-footer.png' ?>" alt="">
            <span><?= SITE_OPTIONS['email_site'] ?? '-' ?></span>
        </div>

        <p data-aos="fade-left" class="follow">Siga nossas redes sociais:</p>

        <div data-aos="fade-right" class="item">
            <img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/instagram-footer.png' ?>" alt="">
            <span><?= SITE_OPTIONS['instagram_site'] ?? '-' ?></span>
        </div>

        <div data-aos="fade-left" class="item">
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

<a href="#" id="back-top" class="text-white" title="Voltar para o topo"></a>
</body>
</html>
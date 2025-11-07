//# loader - Runs when the DOM is ready, doesn't wait for images
document.addEventListener('DOMContentLoaded', function() {
    jQuery('#page-loader').fadeOut(300);
    jQuery('html,body').css('overflow', 'auto');
});

// ready
jQuery(document).ready(function () {

    // Definições de animação para mobile
    if (window.innerWidth < 1080) { // Um breakpoint comum para mobile
        // Fileira 1 de icones
        jQuery('.sb-icon-1').attr('data-aos', 'fade-down-right');
        jQuery('.sb-icon-2').attr('data-aos', 'fade-down-left');
        jQuery('.sb-icon-3').attr('data-aos', 'fade-down-right');
        jQuery('.sb-icon-4').attr('data-aos', 'fade-down-left');

        // Fileira 2 de informacoes
        jQuery('.sb-info-1').attr('data-aos', 'fade-up-right');
        jQuery('.sb-info-2').attr('data-aos', 'fade-up-left');
        jQuery('.sb-info-3').attr('data-aos', 'fade-up-right');
        jQuery('.sb-info-4').attr('data-aos', 'fade-up-left');
    }

    setTimeout(function () {
        AOS.init({duration: 1100, once: true, delay: 0});
    }, 300)

    // Escuta os eventos específicos do collapse do Bootstrap
    const navcollapese = jQuery('.navbar-collapse');
    navcollapese.on('show.bs.collapse', function () {
        // Menu está a ser aberto - mostrar ícone de fechar
        const icon = jQuery('.navbar-toggler').find('.navbar-toggler-icon');
        icon.css('background-image', 'url("' + window.MJ_TEMPLATE_URL + '/assets/imgs/menu-close.svg")');
    });

    navcollapese.on('hide.bs.collapse', function () {
        // Menu está a ser fechado - mostrar ícone de abrir
        const icon = jQuery('.navbar-toggler').find('.navbar-toggler-icon');
        icon.css('background-image', 'url("' + window.MJ_TEMPLATE_URL + '/assets/imgs/menu-mobile.svg")');
    });

    // OU se você quiser fechar em QUALQUER item de menu (incluindo principais)
    jQuery('.navbar-collapse .nav-link').on('click', function (e) {
        const href = jQuery(this).attr('href');

        if (href && href !== '#' && href !== '') {
            jQuery('.navbar-collapse').collapse('hide');
        }
    });

    // Mostra o botão quando desce um pouco a página
    jQuery(window).scroll(function () {
        const scrollTop = jQuery(this).scrollTop();

        if (scrollTop > 100) {
            jQuery('#back-top').fadeIn();
        } else {
            jQuery('#back-top').fadeOut();
        }
    });

    // menus
    jQuery('a[href="#sobre"]').on('click', function (e) {
        e.preventDefault();

        jQuery('html, body').animate({
            scrollTop: jQuery('#sobre').offset().top
        }, 500);
    });

    jQuery('a[href="#servicos"],.servicos').on('click', function (e) {
        e.preventDefault();

        jQuery('html, body').animate({
            scrollTop: jQuery('#servicos').offset().top
        }, 500);
    });

    jQuery('a[href="#diferenciais"],.diferenciais').on('click', function (e) {
        e.preventDefault();

        // no ‘desktop’ fica em cima dos icones
        const subtracao = window.outerWidth > 1080 ? 200 : 0;

        jQuery('html, body').animate({
            scrollTop: jQuery('#diferenciais').offset().top - subtracao
        }, 500);
    });

    jQuery('a[href="#portfolio"],.portfolio').on('click', function (e) {
        e.preventDefault();

        jQuery('html, body').animate({
            scrollTop: jQuery('#portfolio').offset().top
        }, 500);
    });

    jQuery('a[href="#clientes"],.clientes').on('click', function (e) {
        e.preventDefault();

        jQuery('html, body').animate({
            scrollTop: jQuery('#clientes').offset().top
        }, 500);
    });

    // Animação suave ao clicar no botão
    jQuery('#back-top').click(function (e) {
        e.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, 400); // 600ms de animação
    });

    // Animação accordeon
    jQuery('.accordeon .titulo').click(function (e) {
        e.preventDefault();
        jQuery(this).find('img').toggleClass('rotate');
        jQuery(this).siblings('.content').toggleClass('hide');
    });
});


// Slider
jQuery(document).ready(function () {
    jQuery('.owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        smartSpeed: 600,
        responsiveClass: true,
        mouseDrag: false,
        onInitialized: function () {
            // Forçar recálculo após inicialização
            setTimeout(function () {
                jQuery('.owl-carousel').trigger('refresh.owl.carousel');
            }, 0);
        },
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
});

// Envia e-mail do formulário de contato
jQuery(document).ready(function () {

    jQuery("#enviar_form_contato").on('click', function (event) {
        event.preventDefault()

        let nome = jQuery("#nome").val().trim()
        let telefone = jQuery("#telefone").val().trim()
        let email = jQuery("#email").val().trim()
        let mensagem = jQuery("#mensagem").val().trim()

        jQuery.ajax({
            url: window.MJ_AJAX_URL,
            type: 'POST',
            data: {
                action: 'enviar_formulario_contato',
                nome, telefone, email, mensagem
            },
            success: function (resultado) {
                jQuery("#result_form_contato").html(resultado)

                if (resultado.search("E-mail enviado com sucesso") > 0) {
                    jQuery("input,textarea").val("")

                    setTimeout(function () {
                        jQuery('.alert').hide(500)
                    }, 7000)
                }
            }
        })
    })
})

// Carrossel do portfólio
jQuery(document).ready(function () {
    if (jQuery('.portfolio-carousel').length) {
        // Conta quantos slides existem
        const totalSlides = jQuery('.portfolio-carousel .swiper-slide').length;

        new Swiper('.portfolio-carousel', {
            // Loop só fica true se tiver mais de 1 slide (mais de 9 fotos)
            // loop: totalSlides > 1,
            loop: totalSlides > 0,
            autoplay: {
                delay: 6000,
                disableOnInteraction: true,
            },
            slidesPerView: 1,
            effect: 'slide',
            speed: 700,

            // Paginação
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            // Navegação
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    }
});
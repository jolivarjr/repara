//# loader
jQuery(window).on('load', function () {
    jQuery('#page-loader').fadeOut(500);
    jQuery('html,body').css('overflow', 'auto');
});

// ready
jQuery(document).ready(function () {
    AOS.init({duration: 1100, once: true, delay: 0});

    // Escuta os eventos específicos do collapse do Bootstrap
    const navcollapese = jQuery('.navbar-collapse');
    navcollapese.on('show.bs.collapse', function () {
        // Menu está a ser aberto - mostrar ícone de fechar
        const icon = jQuery('.navbar-toggler').find('.navbar-toggler-icon');
        icon.css('background-image', 'url("' + window.MJ_TEMPLATE_URL + '/assets/imgs/close-menu.png")');
    });

    navcollapese.on('hide.bs.collapse', function () {
        // Menu está a ser fechado - mostrar ícone de abrir
        const icon = jQuery('.navbar-toggler').find('.navbar-toggler-icon');
        icon.css('background-image', 'url("' + window.MJ_TEMPLATE_URL + '/assets/imgs/menu-mobile.png")');
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

        jQuery('html, body').animate({
            scrollTop: jQuery('#diferenciais').offset().top
        }, 500);
    });

    jQuery('a[href="#contato"],.contato').on('click', function (e) {
        e.preventDefault();

        jQuery('html, body').animate({
            scrollTop: jQuery('#footer-site').offset().top
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

        let nome = jQuery("#nome_contato").val().trim()
        let email = jQuery("#email_contato").val().trim()
        let telefone = jQuery("#telefone_contato").val().trim()
        let assunto = jQuery("#assunto_contato").val().trim()
        let mensagem = jQuery("#mensagem_contato").val().trim()

        jQuery.ajax({
            url: window.MJ_AJAX_URL,
            type: 'POST',
            data: {
                action: 'enviar_formulario_contato',
                nome, email, telefone, assunto, mensagem
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


/*

⚙️ Opções Comuns:
    Opção	Tipo	Descrição

    items	Number	Quantidade de itens por slide (padrão). Pode ser sobrescrito no responsive.
    loop	Boolean	Habilita o loop infinito do carrossel.
    margin	Number	Margem (em pixels) entre os itens.
    nav	Boolean	Mostra os botões de navegação (prev/next).
    dots	Boolean	Mostra os pontos de paginação abaixo do carrossel.
    autoplay	Boolean	Inicia a rotação automática dos slides.
    autoplayTimeout	Number	Tempo entre os slides no autoplay (em milissegundos).
    autoplayHoverPause	Boolean	Pausa o autoplay quando o mouse estiver sobre o carrossel.
    smartSpeed	Number	Duração da animação de transição entre slides (ms).
    center	Boolean	Centraliza o item ativo.
    startPosition	Number/String	Define o slide inicial (0, URLHash, etc.).
    navText	Array	Define o texto (ou HTML) dos botões de navegação.
    lazyLoad	Boolean	Carrega imagens apenas quando o slide for exibido (lazy load).
    responsiveClass	Boolean	Adiciona classes CSS responsivas automaticamente.
    stagePadding	Number	Adiciona um padding ao redor dos slides para mostrar parcialmente os vizinhos.
    mouseDrag	Boolean	Permite arrastar com o mouse.
    touchDrag	Boolean	Permite arrastar com o toque em dispositivos móveis.
    pullDrag	Boolean	Se true, permite "puxar" os slides para fora.
    freeDrag	Boolean	Habilita drag sem snap. Pode ficar mais "solto".
    URLhashListener	Boolean	Escuta mudanças de hash para sincronizar com slides.
    animateOut / animateIn	String	Animações de entrada/saída (ex: 'fadeOut', 'fadeIn').

📦 Exemplo mais completo:

jQuery('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    smartSpeed: 600,
    responsiveClass: true,
    navText: ["<span class='prev'>&lt;</span>", "<span class='next'>&gt;</span>"],
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        600: {
            items: 2,
            nav: true
        },
        1000: {
            items: 3,
            nav: true,
            loop: false
        }
    }
});
*/
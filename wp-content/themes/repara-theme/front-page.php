<!-- IN: front-page.php -->

<?php get_header(); ?>
<?php get_template_part('includes/sliders') ?>

<main>
    <section class="introducao">
        <div data-aos="fade-left" data-aos-delay="200">
            <h3>Engenharia aplicada, <strong>obtendo soluções que transformam.</strong></h3>
            <h4>Mais de 8 anos de experiência em engenharia e facilities.</h4>
        </div>
    </section>

    <section id="sobre">
        <div class="sobre-info content-fixed">
            <h3 data-aos="fade-down">Sobre Nós</h3>

            <div data-aos="fade-left" class="detalhe"></div>

            <div data-aos="fade-right" class="texto">
                <p>
                    A REPARA nasceu com o propósito de entregar soluções completas, modernas e confiáveis em
                    engenharia e facilities. Desde o início, temos como essência a <b>agilidade, a qualidade e a
                        inovação</b>, pilares que sustentam cada projeto que realizamos.
                </p>

                <p>
                    <b>Nossa estrutura</b> conta com equipes técnicas próprias, suporte estratégico em tempo real e
                    atuação em escala nacional, o que nos permite atender com eficiência demandas de diferentes
                    portes e segmentos.
                </p>

                <p>
                    Mais do que serviços, oferecemos tranquilidade e confiança para que nossos clientes tenham a
                    certeza de contar com uma parceira sólida, preparada para transformar desafios em resultados
                    concretos.
                </p>
            </div>
        </div>

        <div class="sobre-bases">

            <div data-aos="fade-down-right" class="fileira">
                <div data-aos="" class="icone sb-icon-1"><img
                            src="<?= MJ_TEMPLATE_URL . '/assets/imgs/bandeira.png' ?>" alt=""></div>
                <div data-aos="" class="icone sb-icon-2"><img
                            src="<?= MJ_TEMPLATE_URL . '/assets/imgs/predio.png' ?>" alt=""></div>
                <div data-aos="" class="icone sb-icon-3"><img
                            src="<?= MJ_TEMPLATE_URL . '/assets/imgs/network.png' ?>" alt=""></div>
                <div data-aos="" class="icone sb-icon-4"><img
                            src="<?= MJ_TEMPLATE_URL . '/assets/imgs/brazil.png' ?>" alt=""></div>
            </div>

            <div data-aos="fade-down-left" class="fileira">
                <div data-aos="" class="informacao sb-info-1">
                    <div class="titulo">FUNDAÇÃO</div>
                    <div class="texto">
                        2017
                    </div>
                </div>
                <div data-aos="" class="informacao sb-info-2">
                    <div class="titulo">SEDE</div>
                    <div class="texto">
                        Belém-PA
                    </div>
                </div>
                <div data-aos="" class="informacao sb-info-3">
                    <div class="titulo">BASES</div>
                    <div class="texto">
                        São Luiz-MA <br>
                        Fortaleza-CE <br>
                        São Paulo-SP
                    </div>
                </div>
                <div data-aos="" class="informacao sb-info-4">
                    <div class="titulo">PRESENÇA</div>
                    <div class="texto">
                        24 Estados
                        Nacionais
                    </div>
                </div>
            </div>

        </div>

        <div class="politicas content-fixed">
            <h3 data-aos="flip-up">POLÍTICAS</h3>
            <i data-aos="fade-left">Compromisso com <strong>pessoas, qualidade, segurança e proteção de dados.</strong></i>

            <div class="items">

                <?php $get_posts = get_posts(['posts_per_page' => -1, 'post_type' => 'politicas_pv']); ?>
                <?php if ($get_posts) : ?>
                    <?php foreach ($get_posts as $politica) : ?>
                        <?php
                        $attachment_id = get_post_meta($politica->ID, 'arquivo', true);
                        $link = $attachment_id ? wp_get_attachment_url($attachment_id) : '#';
                        ?>

                        <div data-aos="zoom-in-up" class="accordeon">
                            <div class="titulo"><?= esc_html($politica->post_title) ?> <img class="rotate"
                                                                                   src="<?= MJ_TEMPLATE_URL . '/assets/imgs/seta.png' ?>"
                                                                                   alt="ícone de seta"></div>
                            <div class="content hide">
                                <div class="conteudo">
                                    <?= !empty($politica->post_excerpt) ? apply_filters('the_content', $politica->post_excerpt) : '' ?>
                                </div>
                                <?php if ($link !== '#') : ?>
                                    <a class="link" target="_blank" href="<?= esc_url($link) ?>">
                                        [Ler política completa]
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>

                    <?php endforeach; ?>
                <?php endif; ?>

            </div>

        </div>

    </section>

    <section id="servicos">
        <div class="content-fixed">
            <h3 data-aos="zoom-out-right">SERVIÇOS</h3>
            <div data-aos="fade-down" class="detalhe"></div>

            <h4 data-aos="zoom-out-left">
                Soluções completas em engenharia e facilities,
                com a qualidade e inovação que seu negócio precisa
                para crescer com segurança
            </h4>

            <div class="cards">
                <div data-aos="fade-left" class="item item_side">
                    <div class="titulo">LIMPEZA</div>
                    <div class="linha"></div>

                    <div class="opcoes">
                        <div>
                            <img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/check-box.png' ?>" alt="">
                            <span>Limpeza profissional</span>
                        </div>
                        <div>
                            <img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/check-box.png' ?>" alt="">
                            <span>Conservação</span>
                        </div>
                        <div>
                            <img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/check-box.png' ?>" alt="">
                            <span>Higienização</span>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" class="item item_central">
                    <div class="titulo">MANUTENÇÃO</div>
                    <div class="linha"></div>

                    <div class="opcoes">
                        <div>
                            <img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/check-box.png' ?>" alt="">
                            <span>Predial</span>
                        </div>
                        <div>
                            <img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/check-box.png' ?>" alt="">
                            <span>Climatização</span>
                        </div>
                        <div>
                            <img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/check-box.png' ?>" alt="">
                            <span>Eletromecânica</span>
                        </div>
                        <div>
                            <img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/check-box.png' ?>" alt="">
                            <span>Sistemas de combate a incêndio</span>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-right" class="item item_side">
                    <div class="titulo">ENGENHARIA</div>
                    <div class="linha"></div>

                    <div class="opcoes">
                        <div>
                            <img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/check-box.png' ?>" alt="">
                            <span>Obras civis (reformas e construções)</span>
                        </div>
                        <div>
                            <img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/check-box.png' ?>" alt="">
                            <span>Sistemas de combate a incêndio</span>
                        </div>
                    </div>
                </div>
            </div>

            <div data-aos="fade-left" class="modalidades">
                <h5>Modalidades</h5>
                <div class="items">
                    Spot (pontual) <b>•</b> Recorrente com equipe volante <b>•</b> Recorrente com equipe fixa
                </div>

                <div class="items_mobile">
                    <b>•</b> Spot (pontual)<br>
                    <b>•</b> Recorrente com equipe volante<br>
                    <b>•</b> Recorrente com equipe fixa
                </div>
            </div>

            <h2 data-aos="fade-right">
                Mais de 100 pontos
                de atendimento em todo o Brasil
            </h2>

            <a data-aos="fade-up" target="_blank" href="<?= SITE_OPTIONS['link_contato'] ?? "#" ?>" class="saiba_mais">
                <img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/wpp-white.png' ?>" alt="">
                SAIBA MAIS
            </a>
    </section>

    <section id="diferenciais">
        <div class="bloco_1">

            <div class="item">
                <div data-aos="fade-down-right" class="icone">
                    <img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/24horas.png' ?>" alt="">
                </div>

                <div data-aos="fade-up-right" class="textos">
                    <h4>ATENDIMENTO</h4>
                    <div class="horas">
                        <p>24<span>H</span></p>
                    </div>
                    <h5>
                        Single Site <br>e Multi Site
                    </h5>
                </div>
            </div>

            <div class="item">
                <div data-aos="fade-up" class="icone">
                    <img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/equipe.png' ?>" alt="">
                </div>

                <div data-aos="fade-down" class="textos">
                    <h4>EQUIPE</h4>
                    <div class="detalhe"></div>
                    <div class="paragrafos">
                        <p>Supervisão dedicada</p>

                        <p>Profissionais qualificados tecnicamente</p>

                        <p>Atuamos com base em normas técnicas rigorosas</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div data-aos="fade-down-left" class="icone">
                    <img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/gear.png' ?>" alt="">
                </div>

                <div data-aos="fade-up-left" class="textos">
                    <h4>GESTÃO</h4>
                    <div class="detalhe"></div>
                    <div class="paragrafos">
                        <p>Controles Mobile</p>

                        <p>Entrega de KPIs e indicadores de desempenho</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bloco_2">
            <div class="content-fixed">
                <div data-aos="fade-left" class="texto_1">
                    Processos ágeis e eficientes,
                    garantindo resposta imediata às necessidades do cliente:
                </div>

                <div data-aos="fade-right" class="texto_2">
                    • Agilidade na contratação e alocação de pessoas <br><span></span>
                    • Rapidez na disponibilização de materiais e equipamentos
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <!-- Slider main container -->
        <div class="swiper portfolio-carousel">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <?php
                $get_posts_galerias = get_posts(['posts_per_page' => 1, 'post_type' => 'galerias']);
                $primeiro_post = !empty($get_posts_galerias) ? $get_posts_galerias[0] : null;

                $imagens_ids = !empty($primeiro_post)
                        ? get_post_meta($primeiro_post->ID, 'imagens', true)
                        : [];

                if ($imagens_ids) {
                    $all_image_ids = explode(',', $imagens_ids);
                    $slides = array_chunk($all_image_ids, 9); // Agrupa as imagens em conjuntos de 9

                    foreach ($slides as $slide_images) {
                        ?>
                        <div class="swiper-slide">
                            <div class="galeria">
                                <?php
                                foreach ($slide_images as $image_id) {
                                    $image_data = wp_get_attachment_image_src($image_id, 'large');
                                    if ($image_data) {
                                        $image_url = $image_data[0];
                                        ?>
                                        <div class="container_foto">
                                            <img data-aos="zoom-in" src="<?= $image_url ?>"
                                                 alt="Foto da galeria de projetos" class="port_foto" loading="lazy">
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>

            <?php
            // Só mostra a navegação se tiver mais de 9 imagens
            //            if (isset($all_image_ids) && count($all_image_ids) > 9) :
            if (isset($all_image_ids)) :
                ?>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            <?php endif; ?>
        </div>
    </section>

    <section id="clientes">
        <div class="content-fixed">

            <div class="infos">
                <div class="icon"></div>

                <div class="textos">
                    <p data-aos="fade-down" class="p1">NOSSOS</p>
                    <p data-aos="fade-up" class="p2">CLIENTES</p>
                    <p data-aos="fade-left" class="p3">
                        Ao longo da nossa trajetória, conquistamos a confiança de empresas
                        de diversos setores. Cada cliente é um parceiro estratégico, e juntos construímos histórias de
                        sucesso pautadas em qualidade e inovação.
                    </p>
                </div>
            </div>

            <div class="marcas" data-aos="fade-up">
                <div class="linha linha-4">
                    <img class="item" src="<?= MJ_TEMPLATE_URL . '/assets/imgs/marcas/ml.png' ?>" alt="">
                    <img class="item" src="<?= MJ_TEMPLATE_URL . '/assets/imgs/marcas/dhl.png' ?>" alt="">
                    <img class="item" src="<?= MJ_TEMPLATE_URL . '/assets/imgs/marcas/renner.png' ?>" alt="">
                    <img class="item" src="<?= MJ_TEMPLATE_URL . '/assets/imgs/marcas/americanas.png' ?>" alt="">
                </div>

                <div class="linha linha-2">
                    <img class="item" src="<?= MJ_TEMPLATE_URL . '/assets/imgs/marcas/pitagoras.png' ?>" alt="">
                    <img class="item" src="<?= MJ_TEMPLATE_URL . '/assets/imgs/marcas/sampaio.png' ?>" alt="">
                    <img class="item" src="<?= MJ_TEMPLATE_URL . '/assets/imgs/marcas/brf.png' ?>" alt="">
                </div>

                <div class="linha linha-3">
                    <img class="item" src="<?= MJ_TEMPLATE_URL . '/assets/imgs/marcas/sushi-ruy.png' ?>" alt="">
                    <img class="item" src="<?= MJ_TEMPLATE_URL . '/assets/imgs/marcas/salta.png' ?>" alt="">
                </div>
            </div>

            <div class="marcas_mobile" data-aos="fade-up">
                <img class="item" src="<?= MJ_TEMPLATE_URL . '/assets/imgs/marcas/ml.png' ?>" alt="">
                <img class="item" src="<?= MJ_TEMPLATE_URL . '/assets/imgs/marcas/dhl.png' ?>" alt="">
                <img class="item" src="<?= MJ_TEMPLATE_URL . '/assets/imgs/marcas/renner.png' ?>" alt="">
                <img class="item" src="<?= MJ_TEMPLATE_URL . '/assets/imgs/marcas/americanas.png' ?>" alt="">

                <img class="item" src="<?= MJ_TEMPLATE_URL . '/assets/imgs/marcas/pitagoras.png' ?>" alt="">
                <img class="item" src="<?= MJ_TEMPLATE_URL . '/assets/imgs/marcas/sampaio.png' ?>" alt="">
                <img class="item" src="<?= MJ_TEMPLATE_URL . '/assets/imgs/marcas/brf.png' ?>" alt="">

                <img class="item" src="<?= MJ_TEMPLATE_URL . '/assets/imgs/marcas/sushi-ruy.png' ?>" alt="">
                <img class="item" src="<?= MJ_TEMPLATE_URL . '/assets/imgs/marcas/salta.png' ?>" alt="">
            </div>

        </div>
    </section>

    <section id="contato">
        <div class="content-fixed" data-aos="fade-up">
            <div class="titulo"><span>Contato/Orçamento</span></div>
            <form>
                <input type="text" id="nome" placeholder="Nome:">
                <input type="text" id="telefone" placeholder="Telefone:">
                <input type="text" id="email" placeholder="E-mail:">
                <textarea id="mensagem" cols="30" rows="5" placeholder="Mensagem:"></textarea>

                <button id="enviar_form_contato">Enviar<span></span></button>
                <div id="result_form_contato"></div>
            </form>
        </div>
    </section>

    <section id="onde_estamos">
        <div class="content">

            <div class="titulo">
                <span data-aos="fade-left">onde estamos</span>
                <div data-aos="fade-right" class="detalhe"></div>
            </div>

            <div data-aos="fade-up" class="infos">
                <img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/o_location.png' ?>" alt="">
                <div class="textos">
                    <p class="bold">
                        Estamos presentes em 23 estados do Brasil
                        e no Distrito Federal:
                    </p>
                    <span>
                        • Acre (AC)<br>
                        • Alagoas (AL)<br>
                        • Amapá (AP)<br>
                        • Amazonas (AM)<br>
                        • Bahia (BA)<br>
                        • Ceará (CE)<br>
                        • Espírito Santo (ES)<br>
                        • Goiás (GO)<br>
                        • Distrito Federal (DF)<br>
                        • Maranhão (MA)<br>
                        • Mato Grosso (MT)<br>
                        • Mato Grosso do Sul (MS)<br>
                        • Minas Gerais (MG)<br>
                        • Pará (PA)<br>
                        • Paraíba (PB)<br>
                        • Pernambuco (PE)<br>
                        • Piauí (PI)<br>
                        • Rio de Janeiro (RJ)<br>
                        • Rio Grande do Norte (RN)<br>
                        • Rio Grande do Sul (RS)<br>
                        • Rondônia (RO)<br>
                        • São Paulo (SP)<br>
                        • Sergipe (SE)<br>
                        • Tocantins (TO)
                    </span>
                </div>
            </div>

            <div class="infos">
                <img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/o_handshake.png' ?>" alt="">
                <div class="textos">
                    <p class="bold">
                        Contamos com clientes ativos
                        em diversas regiões do país
                    </p>
                </div>
            </div>
            <div class="infos">
                <img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/o_building.png' ?>" alt="">
                <div class="textos">
                    <p class="bold">
                        Unidades: <br>
                        Matriz: Belém/PA <br>
                        Bases Operacionais: Fortaleza/CE, São Paulo/SP e São Luiz/MA
                    </p>
                </div>
            </div>

        </div>
    </section>
</main>

<?php get_template_part('includes/footer-page'); ?>

<!-- IN: front-page.php -->

<?php get_header(); ?>
<?php get_template_part('includes/sliders') ?>

<main>
    <section class="introducao">
        <h3>Engenharia aplicada, <strong>soluções que transformam.</strong></h3>
        <h4>Mais de 8 anos de experiência em engenharia e manutenção industrial.</h4>
    </section>


    <section id="sobre">
        <div class="sobre-info content-fixed">
            <h3>Sobre Nós</h3>

            <div class="detalhe"></div>

            <div class="texto">
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

            <div class="fileira">
                <div class="icone"><img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/bandeira.png' ?>" alt=""></div>
                <div class="icone"><img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/predio.png' ?>" alt=""></div>
                <div class="icone"><img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/network.png' ?>" alt=""></div>
                <div class="icone"><img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/brazil.png' ?>" alt=""></div>
            </div>

            <div class="fileira">
                <div class="informacao">
                    <div class="titulo">FUNDAÇÃO</div>
                    <div class="texto">
                        2017
                    </div>
                </div>
                <div class="informacao">
                    <div class="titulo">SEDE</div>
                    <div class="texto">
                        Belém-PA
                    </div>
                </div>
                <div class="informacao">
                    <div class="titulo">BASES</div>
                    <div class="texto">
                        São Luiz-MA <br>
                        Fortaleza-CE <br>
                        São Paulo-SP
                    </div>
                </div>
                <div class="informacao">
                    <div class="titulo">PRESENÇA</div>
                    <div class="texto">
                        24 Estados
                        Nacionais
                    </div>
                </div>
            </div>

        </div>

        <div class="politicas content-fixed">
            <h3>POLÍTICAS</h3>
            <i>Compromisso com <strong>pessoas, qualidade, segurança e proteção de dados.</strong></i>

            <div class="items">

                <div class="accordeon">
                    <div class="titulo">Recursos Humanos <img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/seta.png' ?>"
                                                              alt=""></div>
                    <div class="content">
                        <div class="conteudo">
                            Valorizamos as pessoas como nosso maior ativo, promovendo um ambiente seguro, ético e
                            colaborativo, com oportunidades de crescimento e desenvolvimento contínuo.
                        </div>
                        <a class="link" target="_blank" href="<?= SITE_OPTIONS['link_politica'] ?? "#" ?>">
                            [Ler política completa]
                        </a>
                    </div>
                </div>

                <div class="accordeon">
                    <div class="titulo">Qualidade <img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/seta.png' ?>" alt="">
                    </div>
                    <div class="content">
                        <div class="conteudo">
                            Buscamos a excelência em tudo que fazemos, garantindo agilidade, satisfação do cliente e
                            melhoria contínua dos nossos processos e serviços.
                        </div>
                        <a class="link" target="_blank" href="<?= SITE_OPTIONS['link_politica'] ?? "#" ?>">
                            [Ler política completa]
                        </a>
                    </div>
                </div>

                <div class="accordeon">
                    <div class="titulo">Segurança e Proteção de Dados <img
                                src="<?= MJ_TEMPLATE_URL . '/assets/imgs/seta.png' ?>" alt=""></div>
                    <div class="content">
                        <div class="conteudo">
                            Priorizamos a vida, a saúde e a privacidade, atuando com prevenção, capacitação e
                            conformidade
                            com a LGPD para proteger nossos colaboradores, clientes e informações.
                        </div>
                        <a class="link" target="_blank" href="<?= SITE_OPTIONS['link_politica'] ?? "#" ?>">
                            [Ler política completa]
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <section id="servicos">
        <div class="content-fixed">
            <h3>SERVIÇOS</h3>
            <div class="detalhe"></div>

            <h4>
                Soluções completas em engenharia e facilities,
                com a qualidade e inovação que seu negócio precisa
                para crescer com segurança
            </h4>

            <div class="cards">
                <div class="item item_side">
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
                <div class="item item_central">
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
                <div class="item item_side">
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

            <div class="modalidades">
                <h5>Modalidades</h5>
                <div class="items">
                    Spot (pontual) <b>•</b> Recorrente com equipe volante <b>•</b> Recorrente com equipe fixa
                </div>
            </div>

            <h2>
                Mais de 100 pontos
                de atendimento em todo o Brasil
            </h2>

            <a target="_blank" href="<?= SITE_OPTIONS['link_contato'] ?? "#" ?>"  class="saiba_mais">
                <img src="<?= MJ_TEMPLATE_URL . '/assets/imgs/wpp-white.png' ?>" alt="">
                SAIBA MAIS
            </a>
    </section>

    <section id="diferenciais">

    </section>

    <section id="portfolio">

    </section>

    <section id="clientes">

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

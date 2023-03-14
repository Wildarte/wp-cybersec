<?php get_header();
//Template Name: page curso
?>

<main>

    <section class="head_cursos">
        <div class="container content_head_cursos d-flex" style="background-image: url(<?= get_field('imagem_cabecalho')['url']; ?>);">
            <div class="f-50 left_header">
                <img src="<?= get_field('icone_cabecalho')['url']; ?>" alt="">

                <h2><?= get_field('titulo_curso'); ?></h2>

                <p><?= get_field('subtitulo_curso'); ?></p>
            </div>
            <div class="f-50"></div>
        </div>
    </section>

    <section class="info_curso">
        <div class="container content_info_curso">

            <div class="container-min">
            <h2><?= get_field('titulo_informacoes'); ?></h2>

                <p><?= get_field('texto_do_curso'); ?></p>

            </div>
            
            <div class="container bottom_sec_universo">
                <a href="<?= get_field('link_compra_curso'); ?>" class="link_curso"> 
                    <img class="btn_girl isonscreen opa-0 btn_boy" src="<?= get_template_directory_uri(); ?>/assets/img/matricule-se-roxo.png" alt="" title="">   
                </a>
            </div>
        </div>
    </section>

    <section class="sec_cursos_about container">
        <div class="container content_sec_cursos_about">
            <header class="head_about_cursos">
                <h2>Aprenda os <span class="color-blue">cursos básicos:</span></h2>
            </header>

            <section class="list_card_course d-flex">
                
                <?php

                    $cards_curso = get_field('campos_card');
                
                ?>
                <?php foreach($cards_curso as $card): if($card == 'pen-100'): ?>
                <article class="card_course opa-0 card_pen">
                    <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/pen-100-line.png" alt="Penetration Testing" title="Curso Penetration Testing">
                    <a href="<?= get_field('link_pen_100', get_id_by_template_name('page-home.php')) ?>" class="content_card_course"> 
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/icon-pen-100.png" alt="Penetration Testing" title="Penetration Testing">
                        <h3>Penetration Testing</h3>

                        <p>PEN-100</p>
                    </a>
                </article>
                <?php endif; endforeach; ?>
                <?php foreach($cards_curso as $card): if($card == 'cld-100'): ?>
                <article class="card_course opa-0 card_cld">
                    <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/cld-100-line.png" alt="Curso Cloud Security">
                    <a href="<?= get_field('link_cld_100', get_id_by_template_name('page-home.php')) ?>" class="content_card_course">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/cld-100.png" alt="Curso Cloud Security" title="Curso Cloud Security">
                        <h3>Cloud Security</h3>

                        <p>CLD-100</p>
                    </a>
                </article>
                <?php endif; endforeach; ?>
                <?php foreach($cards_curso as $card): if($card == 'ssd-100'): ?>
                <article class="card_course opa-0 card_ssd">
                    <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/ssd-100-line.png" alt="Curso Software Security" title="Curso Software Security">
                    <a href="<?= get_field('link_ssd_100', get_id_by_template_name('page-home.php')) ?>" class="content_card_course">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/ssd-100.png" alt="Curso Software Security" title="Curso Software Security">
                        <h3>Software Security</h3>

                        <p>SSD-100</p>
                    </a>
                </article>
                <?php endif; endforeach; ?>
                <?php foreach($cards_curso as $card): if($card == 'exp-100'): ?>
                <article class="card_course opa-0 card_exp">
                    <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/exp-100-line.png" alt="Curso EXPLOIT DEVELOPMENT" title="Curso EXPLOIT DEVELOPMENT">
                    <a href="<?= get_field('link_exp_100', get_id_by_template_name('page-home.php')) ?>" class="content_card_course">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/exp-100.png" alt="Curso EXPLOIT DEVELOPMENT" title="Curso EXPLOIT DEVELOPMENT">
                        <h3>EXPLOIT DEVELOPMENT</h3>

                        <p>EXP-100</p>
                    </a>
                </article>
                <?php endif; endforeach; ?>
                <?php foreach($cards_curso as $card): if($card == 'soc-100'): ?>
                <article class="card_course opa-0 card_soc">
                    <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/soc-100-line.png" alt="SECURITY OPERATIONS" title="SECURITY OPERATIONS">
                    <a href="<?= get_field('link_soc_100', get_id_by_template_name('page-home.php')) ?>" class="content_card_course">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/soc-100.png" alt="SECURITY OPERATIONS" title="SECURITY OPERATIONS">
                        <h3>SECURITY OPERATIONS</h3>

                        <p>SOC-100</p>
                    </a>
                </article>
                <?php endif; endforeach; ?>
                <?php foreach($cards_curso as $card): if($card == 'web-100'): ?>
                <article class="card_course opa-0 card_web">
                    <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/web-100-line.png" alt="WEB APLICATION" title="WEB APLICATION">
                    <a href="<?= get_field('link_web_100', get_id_by_template_name('page-home.php')) ?>" class="content_card_course">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/web-100.png" alt="WEB APLICATION" title="WEB APLICATION">
                        <h3>WEB APLICATION</h3>

                        <p>WEB-100</p>
                    </a>
                </article>
                <?php endif; endforeach; ?>
                <?php foreach($cards_curso as $card): if($card == 'pen-200'): ?>
                <article class="card_course opa-0 card_pen_200">
                    <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/pen-200-line.png" alt="PENETRATION TESTING" title="PENETRATION TESTING">
                    <a href="<?= get_field('link_pen_200', get_id_by_template_name('page-home.php')) ?>" class="content_card_course">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/pen-200.png" alt="PENETRATION TESTING" title="PENETRATION TESTING">
                        <h3>PENETRATION TESTING</h3>

                        <p>PEN-200</p>
                    </a>
                </article>
                <?php endif; endforeach; ?>
                <?php foreach($cards_curso as $card): if($card == 'pen-210'): ?>
                <article class="card_course opa-0 card_pen_210">
                    <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/pen-210-line.png" alt="PENETRATION TESTING" title="PENETRATION TESTING">
                    <a href="<?= get_field('link_pen_210', get_id_by_template_name('page-home.php')) ?>" class="content_card_course">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/pen-210.png" alt="PENETRATION TESTING" title="PENETRATION TESTING">
                        <h3>PENETRATION TESTING</h3>

                        <p>PEN-210</p>
                    </a>
                </article>
                <?php endif; endforeach; ?>
                <?php foreach($cards_curso as $card): if($card == 'pen-300'): ?>
                <article class="card_course opa-0 card_pen_300">
                    <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/pen-300-line.png" alt="Penetration Testing" title="Penetration Testing">
                    <a href="<?= get_field('link_pen_300', get_id_by_template_name('page-home.php')) ?>" class="content_card_course">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/pen-300.png" alt="Penetration Testing" title="Penetration Testing">
                        <h3>Penetration Testing</h3>

                        <p>PEN-300</p>
                    </a>
                </article>
                <?php endif; endforeach; ?>
                <?php foreach($cards_curso as $card): if($card == 'web-200'): ?>
                <article class="card_course opa-0 card_web_200">
                    <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/web-200-line.png" alt="WEB APPLICATION" title="WEB APPLICATION">
                    <a href="<?= get_field('link_web_200', get_id_by_template_name('page-home.php')) ?>" class="content_card_course">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/web-200.png" alt="WEB APPLICATION" title="WEB APPLICATION">
                        <h3>WEB APPLICATION</h3>

                        <p>WEB-200</p>
                    </a>
                </article>
                <?php endif; endforeach; ?>
                <?php foreach($cards_curso as $card): if($card == 'web-300'): ?>
                <article class="card_course opa-0 card_web_300">
                    <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/web-300-line.png" alt="WEB APPLICATION" title="WEB APPLICATION">
                    <a href="<?= get_field('link_web_300', get_id_by_template_name('page-home.php')) ?>" class="content_card_course">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/web-300.png" alt="WEB APPLICATION" title="WEB APPLICATION">
                        <h3>WEB APPLICATION</h3>

                        <p>WEB-300</p>
                    </a>
                </article>
                <?php endif; endforeach; ?>
                <?php foreach($cards_curso as $card): if($card == 'exp-301'): ?>
                <article class="card_course opa-0 card_exp_301">
                    <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/exp-301-line.png" alt="EXPLOIT DEVELOPMENT" title="EXPLOIT DEVELOPMENT">
                    <a href="<?= get_field('link_exp_301', get_id_by_template_name('page-home.php')) ?>" class="content_card_course">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/exp-301.png" alt="EXPLOIT DEVELOPMENT" title="EXPLOIT DEVELOPMENT">
                        <h3>EXPLOIT DEVELOPMENT</h3>

                        <p>EXP-301</p>
                    </a>
                </article>
                <?php endif; endforeach; ?>
                <?php foreach($cards_curso as $card): if($card == 'exp-312'): ?>
                <article class="card_course opa-0 card_exp_312">
                    <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/exp-312-line.png" alt="EXPLOIT DEVELOPMENT" title="EXPLOIT DEVELOPMENT">
                    <a href="<?= get_field('link_exp_312', get_id_by_template_name('page-home.php')) ?>" class="content_card_course">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/exp-312.png" alt="EXPLOIT DEVELOPMENT" title="EXPLOIT DEVELOPMENT">
                        <h3>EXPLOIT DEVELOPMENT</h3>

                        <p>EXP-312</p>
                    </a>
                </article>
                <?php endif; endforeach; ?>
                <?php foreach($cards_curso as $card): if($card == 'exp-401'): ?>
                <article class="card_course opa-0 card_exp_401">
                    <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/exp-401-line.png" alt="EXPLOIT DEVELOPMENT" title="EXPLOIT DEVELOPMENT">
                    <a href="<?= get_field('link_exp_401', get_id_by_template_name('page-home.php')) ?>" class="content_card_course">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/exp-401.png" alt="EXPLOIT DEVELOPMENT" title="EXPLOIT DEVELOPMENT">
                        <h3>EXPLOIT DEVELOPMENT</h3>

                        <p>EXP-401</p>
                    </a>
                </article>
                <?php endif; endforeach; ?>
                <?php foreach($cards_curso as $card): if($card == 'soc-200'): ?>
                <article class="card_course opa-0 card_soc_200">
                    <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/soc-200-line.png" alt="SECURITY OPERATIONS" title="SECURITY OPERATIONS">
                    <a href="<?= get_field('link_soc_200', get_id_by_template_name('page-home.php')) ?>" class="content_card_course">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/soc-200.png" alt="SECURITY OPERATIONS" title="SECURITY OPERATIONS">
                        <h3>SECURITY OPERATIONS</h3>

                        <p>SOC-200</p>
                    </a>
                </article>
                <?php endif; endforeach; ?>
            </section>
        </div>
    </section>

</main>

<?php get_footer() ?>

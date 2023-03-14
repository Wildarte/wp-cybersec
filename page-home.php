<?php include('header.php');
//Template Name: Home page
?>
    <main>
        <section class="sec_hero">
            <div class="content_hero">
                <video autoplay loop muted class="">
                    <source src="<?= get_field('video_home'); ?>" type="video/mp4">
                </video>
            </div>
        </section>

        <section class="sec_girl container isonscreen">
            <!-- 
            <img class="img_back_girl" src="assets/img/background-banner-min.png" alt="">
             -->
            <div class="container content_sec_girl d-flex">
                
                <div class="f-50 sec_girl_left">

                    <h2 class="isonscreen opa-0 title_sec_girl">UMA ABORDAGEM OFENSIVA</h2>

                    <p class="isonscreen opa-0">Estratégias de mitigação bem projetadas precisam de testes de segurança de rotina. Os melhores testes simulam as técnicas e métodos de um intruso. Ao incentivar os alunos a usar as mesmas ferramentas, técnicas e mentalidade de um hacker, nivelamos o campo de jogo para os defensores.</p>

                    <img class="isonscreen opa-0" src="<?= get_template_directory_uri(); ?>/assets/img/offsec-logo.png" alt="logo Offensive Security" title="logo Offensive Security">

                    <a href="" class="link_curso">
                        <img class="btn_girl isonscreen opa-0 btn_top_girl" src="<?= get_template_directory_uri(); ?>/assets/img/saiba-mais.png" alt="">
                    </a>

                </div>

                <div class="f-50 sec_girl_right">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/girl.png" alt="" class="">
                </div>
            </div>
        </section>

        <section class="sec_courses container">
            <div class="container content_sec_courses">
                <header class="header_sec_courses">
                    <h2>Certificações Pentest</h2>

                    <p>Avance em sua carreira de segurança da informação com nosso treinamento líder do setor.</p>
                </header>

                <section class="list_card_course d-flex">
                    <?php
                        $link_pen_100 = get_field('link_pen_100');
                        
                        if(!empty($link_pen_100)):
                    ?>
                    <article class="card_course opa-0 card_pen">
                        <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/pen-100-line.png" alt="Penetration Testing" title="Curso Penetration Testing">
                        <a href="<?= $link_pen_100; ?>" class="content_card_course"> 
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/icon-pen-100.png" alt="Penetration Testing" title="Penetration Testing">
                            <h3>Penetration Testing</h3>

                            <p>PEN-100</p>
                        </a>
                    </article>
                    <?php endif; ?>
                    <?php
                        $link_cld_100 = get_field('link_cld_100');
                        
                        if(!empty($link_cld_100)):
                    ?>
                    <article class="card_course opa-0 card_cld">
                        <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/cld-100-line.png" alt="Curso Cloud Security">
                        <a href="<?= $link_cld_100; ?>" class="content_card_course">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/cld-100.png" alt="Curso Cloud Security" title="Curso Cloud Security">
                            <h3>Cloud Security</h3>

                            <p>CLD-100</p>
                        </a>
                    </article>
                    <?php endif; ?>

                    <?php
                        $link_ssd_100 = get_field('link_ssd_100');
                        
                        if(!empty($link_ssd_100)):
                    ?>
                    <article class="card_course opa-0 card_ssd">
                        <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/ssd-100-line.png" alt="Curso Software Security" title="Curso Software Security">
                        <a href="<?= $link_ssd_100; ?>" class="content_card_course">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/ssd-100.png" alt="Curso Software Security" title="Curso Software Security">
                            <h3>Software Security</h3>

                            <p>SSD-100</p>
                        </a>
                    </article>
                    <?php endif; ?>

                    <?php
                        $link_exp_100 = get_field('link_exp_100');
                        
                        if(!empty($link_exp_100)):
                    ?>
                    <article class="card_course opa-0 card_exp">
                        <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/exp-100-line.png" alt="Curso EXPLOIT DEVELOPMENT" title="Curso EXPLOIT DEVELOPMENT">
                        <a href="<?= $link_exp_100; ?>" class="content_card_course">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/exp-100.png" alt="Curso EXPLOIT DEVELOPMENT" title="Curso EXPLOIT DEVELOPMENT">
                            <h3>EXPLOIT DEVELOPMENT</h3>

                            <p>EXP-100</p>
                        </a>
                    </article>
                    <?php endif; ?>

                    <?php
                        $link_soc_100 = get_field('link_soc_100');
                        
                        if(!empty($link_soc_100)):
                    ?>
                    <article class="card_course opa-0 card_soc">
                        <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/soc-100-line.png" alt="SECURITY OPERATIONS" title="SECURITY OPERATIONS">
                        <a href="<?= $link_soc_100; ?>" class="content_card_course">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/soc-100.png" alt="SECURITY OPERATIONS" title="SECURITY OPERATIONS">
                            <h3>SECURITY OPERATIONS</h3>

                            <p>SOC-100</p>
                        </a>
                    </article>
                    <?php endif; ?>

                    <?php
                        $link_web_100 = get_field('link_web_100');
                        
                        if(!empty($link_web_100)):
                    ?>
                    <article class="card_course opa-0 card_web">
                        <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/web-100-line.png" alt="WEB APLICATION" title="WEB APLICATION">
                        <a href="<?= $link_web_100; ?>" class="content_card_course">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/web-100.png" alt="WEB APLICATION" title="WEB APLICATION">
                            <h3>WEB APLICATION</h3>

                            <p>WEB-100</p>
                        </a>
                    </article>
                    <?php endif; ?>

                    <?php
                        $link_pen_200 = get_field('link_pen_200');
                        
                        if(!empty($link_pen_200)):
                    ?>
                    <article class="card_course opa-0 card_pen_200">
                        <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/pen-200-line.png" alt="PENETRATION TESTING" title="PENETRATION TESTING">
                        <a href="<?= $link_pen_200; ?>" class="content_card_course">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/pen-200.png" alt="PENETRATION TESTING" title="PENETRATION TESTING">
                            <h3>PENETRATION TESTING</h3>

                            <p>PEN-200</p>
                        </a>
                    </article>
                    <?php endif; ?>

                    <?php
                        $link_pen_210 = get_field('link_pen_210');
                        
                        if(!empty($link_pen_210)):
                    ?>
                    <article class="card_course opa-0 card_pen_210">
                        <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/pen-210-line.png" alt="PENETRATION TESTING" title="PENETRATION TESTING">
                        <a href="<?= $link_pen_210; ?>" class="content_card_course">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/pen-210.png" alt="PENETRATION TESTING" title="PENETRATION TESTING">
                            <h3>PENETRATION TESTING</h3>

                            <p>PEN-210</p>
                        </a>
                    </article>
                    <?php endif; ?>

                    <?php
                        $link_pen_300 = get_field('link_pen_300');
                        
                        if(!empty($link_pen_300)):
                    ?>
                    <article class="card_course opa-0 card_pen_300">
                        <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/pen-300-line.png" alt="Penetration Testing" title="Penetration Testing">
                        <a href="<?= $link_pen_300; ?>" class="content_card_course">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/pen-300.png" alt="Penetration Testing" title="Penetration Testing">
                            <h3>Penetration Testing</h3>

                            <p>PEN-300</p>
                        </a>
                    </article>
                    <?php endif; ?>

                    <?php
                        $link_web_200 = get_field('link_web_200');
                        
                        if(!empty($link_web_200)):
                    ?>
                    <article class="card_course opa-0 card_web_200">
                        <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/web-200-line.png" alt="WEB APPLICATION" title="WEB APPLICATION">
                        <a href="<?= $link_web_200; ?>" class="content_card_course">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/web-200.png" alt="WEB APPLICATION" title="WEB APPLICATION">
                            <h3>WEB APPLICATION</h3>

                            <p>WEB-200</p>
                        </a>
                    </article>
                    <?php endif; ?>

                    <?php
                        $link_web_300 = get_field('link_web_300');
                        
                        if(!empty($link_web_300)):
                    ?>
                    <article class="card_course opa-0 card_web_300">
                        <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/web-300-line.png" alt="WEB APPLICATION" title="WEB APPLICATION">
                        <a href="<?= $link_web_300; ?>" class="content_card_course">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/web-300.png" alt="WEB APPLICATION" title="WEB APPLICATION">
                            <h3>WEB APPLICATION</h3>

                            <p>WEB-300</p>
                        </a>
                    </article>
                    <?php endif; ?>

                    <?php
                        $link_exp_301 = get_field('link_exp_301');
                        
                        if(!empty($link_exp_301)):
                    ?>
                    <article class="card_course opa-0 card_exp_301">
                        <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/exp-301-line.png" alt="EXPLOIT DEVELOPMENT" title="EXPLOIT DEVELOPMENT">
                        <a href="<?= $link_exp_301; ?>" class="content_card_course">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/exp-301.png" alt="EXPLOIT DEVELOPMENT" title="EXPLOIT DEVELOPMENT">
                            <h3>EXPLOIT DEVELOPMENT</h3>

                            <p>EXP-301</p>
                        </a>
                    </article>
                    <?php endif; ?>

                    <?php
                        $link_exp_312 = get_field('link_exp_312');
                        
                        if(!empty($link_exp_312)):
                    ?>
                    <article class="card_course opa-0 card_exp_312">
                        <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/exp-312-line.png" alt="EXPLOIT DEVELOPMENT" title="EXPLOIT DEVELOPMENT">
                        <a href="<?= $link_exp_312; ?>" class="content_card_course">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/exp-312.png" alt="EXPLOIT DEVELOPMENT" title="EXPLOIT DEVELOPMENT">
                            <h3>EXPLOIT DEVELOPMENT</h3>

                            <p>EXP-312</p>
                        </a>
                    </article>
                    <?php endif; ?>

                    <?php
                        $link_exp_401 = get_field('link_exp_401');
                        
                        if(!empty($link_exp_401)):
                    ?>
                    <article class="card_course opa-0 card_exp_401">
                        <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/exp-401-line.png" alt="EXPLOIT DEVELOPMENT" title="EXPLOIT DEVELOPMENT">
                        <a href="<?= $link_exp_401; ?>" class="content_card_course">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/exp-401.png" alt="EXPLOIT DEVELOPMENT" title="EXPLOIT DEVELOPMENT">
                            <h3>EXPLOIT DEVELOPMENT</h3>

                            <p>EXP-401</p>
                        </a>
                    </article>
                    <?php endif; ?>

                    <?php
                        $link_soc_200 = get_field('link_soc_200');
                        
                        if(!empty($link_soc_200)):
                    ?>
                    <article class="card_course opa-0 card_soc_200">
                        <img class="line_card_course" src="<?= get_template_directory_uri(); ?>/assets/img/soc-200-line.png" alt="SECURITY OPERATIONS" title="SECURITY OPERATIONS">
                        <a href="<?= $link_soc_200; ?>" class="content_card_course">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/soc-200.png" alt="SECURITY OPERATIONS" title="SECURITY OPERATIONS">
                            <h3>SECURITY OPERATIONS</h3>

                            <p>SOC-200</p>
                        </a>
                    </article>
                    <?php endif; ?>

                </section>
            </div>
        </section>

        <section class="sec_curso container">
            <div class="container d-flex content_curso">
                <div class="f-50 curso_left">
                    <header class="header_curso isonscreen opa-0">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/a-aula-1-caixa.png" alt="" title="">
                    </header>

                    <a href="" class="link_curso">
                        <img class="btn_girl isonscreen opa-0 btn_boy" src="<?= get_template_directory_uri(); ?>/assets/img/saiba-mais.png" alt="" title="">
                    </a>   
                </div>
                
                <div class="f-50 curso_right">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/aula-1.png" alt="" title="">
                </div>
            </div>
            
        </section>

        <section class="sec_universo">
            <!-- 
            <img class="last_bg" src="<?= get_template_directory_uri(); ?>/assets/img/bg-last.png" alt="" title="">
             -->
            <div class="container content_universo">
                <header class="header_universo isonscreen opa-0">
                    <h2>Conheça o <span class="color-pink">universo AC</span></h2>
                </header>

                <img class="d-none" src="<?= get_template_directory_uri(); ?>/assets/img/universo-ac-min.png" alt="" title="">

                <section class="img_group d-flex group_img_desktop">
                    <div class="col_one_img_group">
                        <img class="img_sixth_group opa-0" src="<?= get_template_directory_uri(); ?>/assets/img/group/eventos.png" alt="" title="">
                    </div>
                    <div class="col_two_img_group">
                        <div class="top_two_img_group">
                            <img class="img_second_group opa-0" src="<?= get_template_directory_uri(); ?>/assets/img/group/podcafe.png" alt="" title="">
                        </div>
                        <div class="bottom_two_img_group">
                            <img class="img_fourth_group opa-0" src="<?= get_template_directory_uri(); ?>/assets/img/group/instagram.png" alt="" title="">
                        </div>
                        
                    </div>
                    <div class="col_center_img_group">
                        <img class="img_first_group opa-0" src="<?= get_template_directory_uri(); ?>/assets/img/group/acsoftware.png" alt="" title="">
                    </div>

                    <div class="col_two_img_group">
                        <div class="top_two_img_group">
                            <img class="img_fifth_group opa-0" src="<?= get_template_directory_uri(); ?>/assets/img/group/tirinhas.png" alt="" title="">
                        </div>
                        <div class="bottom_two_img_group">
                            <img class="img_third_group opa-0" src="<?= get_template_directory_uri(); ?>/assets/img/group/youtube.png" alt="" title="">
                        </div>
                    </div>
                    <div class="col_one_img_group last_col_img">
                        <img class="img_seventh_group opa-0" src="<?= get_template_directory_uri(); ?>/assets/img/group/blog.png" alt="" title="">
                    </div>
                </section>

                <section class="group_img_mobile">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/group/eventos.png" alt="" title="">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/group/podcafe.png" alt="" title="">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/group/instagram.png" alt="" title="">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/group/acsoftware.png" alt="" title="">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/group/tirinhas.png" alt="" title="">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/group/youtube.png" alt="" title="">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/group/blog.png" alt="" title="">
                </section>
            </div>

            <div class="container bottom_sec_universo">
                <a href="" class="link_curso"> 
                    <img class="btn_girl isonscreen opa-0 btn_boy" src="<?= get_template_directory_uri(); ?>/assets/img/saiba-mais.png" alt="" title="">   
                </a>
            </div>
        </section>
    </main>

<?php include('footer.php') ?>
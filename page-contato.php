<?php get_header();
//Template Name: Page Contato
?>

    <main>
        <section class="section_contact">
            <div class="container content_section_contact d-flex">
                <div class="f-40 left_contact">
                    <h2>Como posso ajudar?</h2>

                    <p>Estamos disponíveis e ficaremos felizes em ajudá-lo. Preencha o formulário e clique em enviar. Responderemos em breve.</p>
                </div>

                <div class="f-60">
                    <div class="form_over">

                        <img class="img_form_over" src="<?= get_template_directory_uri(); ?>/assets/img/caixa.png" alt="">

                        <?= do_shortcode('[contact-form-7 id="100" title="Formulário de contato 1"]'); ?>
                        
                    </div>

                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
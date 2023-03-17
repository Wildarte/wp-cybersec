
    <footer class="footer">
        <div class="container content_footer d-flex">
            <div class="f-25 col_footer">
                <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                    //add_query_arg( array( 'something' => 'blabla==' ), 'https://www.google.com' );
                ?>
                <img src="<?= get_template_directory_uri(); ?>/assets/img/logo.png" alt="" title="">
            </div>
            <div class="f-25 col_footer">
                <h3>Institucional</h3>
                
                <p>A Accybersec é a revendedora e distribuidora dedicada às soluções da Offensive Security no Brasil. Soluções essas que englobam cursos e certificações que impulsionarão sua carreira na área de segurança cibernética. Os cursos são ministrados por instrutores experientes da indústria que compartilham sua experiência e conhecimento para ajudá-lo a alcançar seus objetivos.</p>
            </div>
            <div class="f-25 col_footer">
                <h3>CERTIFICAÇÕES</h3>

                <div class="cer_list">
                    <a href="https://accyber.com.br/pen-100-2/"><img src="https://accyber.com.br/wp-content/uploads/2023/03/arro.png" alt=""> PEN-100</a>
                    <a href="https://accyber.com.br/cld-100/"><img src="https://accyber.com.br/wp-content/uploads/2023/03/arro.png" alt=""> CLD-100</a>
                    <a href="https://accyber.com.br/ssd-100/"><img src="https://accyber.com.br/wp-content/uploads/2023/03/arro.png" alt=""> SSD-100</a>
                    <a href="https://accyber.com.br/exp-100-3/"><img src="https://accyber.com.br/wp-content/uploads/2023/03/arro.png" alt=""> EXP-100</a>

                    <a href="<?= is_front_page() ? "#cursos" : home_url()."#cursos"; ?>"><strong>Todas...</strong></a>
                </div>
            </div>
            <div class="f-25 col_footer">
                <h3>SOCIAL</h3>

                                
                <div class="social_footer d-flex">
                    <a href="https://www.facebook.com/ACSoftware/" class=""><img src="https://accyber.com.br/wp-content/uploads/2023/03/icon-facebook.png" alt=""></a>
                    <a href="https://www.instagram.com/acsoftwarebr/" class=""><img src="https://accyber.com.br/wp-content/uploads/2023/03/icon-instagram.png" alt=""></a>
                    <a href="https://www.linkedin.com/company/acsoftware/" class=""><img src="https://accyber.com.br/wp-content/uploads/2023/03/icon-linkedin.png" alt=""></a>
                    <a href="https://www.youtube.com/user/ACSoftwareBR" class=""><img src="https://accyber.com.br/wp-content/uploads/2023/03/icon-youtube.png" alt=""></a>
                </div>
            </div>
        </div>

        <div class="bottom_footer">
            <div class="container d-flex content_bottom_footer">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/by-acsoftware-v2-1.png" alt="" title="">
            </div>
           
        </div>
    </footer>
    
    <?php wp_footer(); ?>
</body>
</html>
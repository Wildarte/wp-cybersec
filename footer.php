
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

                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
            </div>
            <div class="f-25 col_footer">
                <h3>SOCIAL</h3>

                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
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
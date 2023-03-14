<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- wordpress header -->
    <?php wp_head(); ?>
    <!-- wordpress header -->
</head>
<body>

    <header class="header">
        <div class="container content_header">
            <a href="<?= home_url(); ?>">
                <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                ?>
                <img src="<?= esc_url( $logo[0] ); ?>" alt="logo cybersec" title="logo cybersec">
            </a>

            <nav class="menu">
                <div class="header_menu_mobile">
 
                    <img class="log_menu_mobile" src="<?= esc_url( $logo[0] ); ?>" alt="logo cybersec" title="logo cybersec">
                    <div class="btn_close_menu">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/close.png" alt="" title="">
                    </div>
                </div>
                
                    <?php wp_nav_menu([
                        'menu' => 'Main Menu',
                        'theme_location' => 'my_main_menu',
                        'container' => false
                    ]) ?>
                

                <div class="cta_over">
                    <a href="<?= home_url(); ?>" class="cta_header">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/btn-bg.png" alt="">
                        <span>Contato</span>
                    </a>
                </div>
            </nav>
            <div class="btn_mobile">
                <div class="rec"></div>
                <div class="rec"></div>
                <div class="rec"></div>
            </div>
        </div>
    </header>
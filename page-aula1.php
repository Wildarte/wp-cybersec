    <?php get_header();
    //Template Name: page Aula 1
    ?>
    <style>
        .f-70{
            flex-basis: 70%;
        }
        .f-30{
            flex-basis: 30%;
        }
        .f-55{
            flex-basis: 55%;
        }
        .f-45{
            flex-basis: 45%;
        }
        .img_boy_two img{
            width: 100%;
            padding-bottom: 60px;
            margin-top: -100px;
        }
        .content_head_cursos{
            padding: 60px 10px 0;
        }
        .right_head_cursos{
            position: relative;
        }
        .left_header{
            padding-top: 0;
            padding-bottom: 100px;
            display: flex;
            justify-content: flex-end;
        }
        .left_header img{
            width: 100%;
        }
        .left_header p{
            margin-bottom: 40px;
            color: #ffffff;
            font-weight: 400;
            width: 100%;
            text-align: justify;
            font-size: 1.75em;
            padding: 0 20px;
        }
        .left_header p strong{
            color: var(--color-green);
            font-weight: bold!important;
        }

        .btn_cta_curso{
            display: flex;
            justify-content: center;
        }
        .btn_cta_curso img{
            width: 400px;
            height: auto;
            position: relative;
            z-index: 1;
        }
        .content_info_curso{
            padding: 200px 10px 0;
        }
        .content_info_curso ul{
            color: var(--color-white);
            margin-bottom: 40px;
            font-size: 1.2em;
            margin-left: 40px;
            list-style: disc;
        }
        .content_right_boy_two{
            max-width: 850px;
        }
        h2.title_two{
            font-weight: 400;
            width: 70%;
            text-transform: uppercase;
        }
        .left_boy_two{
            display: flex;
            justify-content: flex-end;
            align-items: flex-start;
            padding-top: 15%;
        }
        .content_right_head_cursos{
            max-width: 800px;
            height: 100%;
            position: relative;
            display: flex;
            align-items: flex-end;
        }
        .content_right_head_cursos img{
            width: 100%;
            height: auto;
        }
        .content_left_header{
            max-width: 650px;
            padding-bottom: 100px;
        }
        .content_sec_cursos_about h2{
            font-size: 2em;
            color: var(--color-green);
            margin-bottom: 20px;
        }
        .card_cyber{
            flex-basis: calc(33% - 20px);
            margin: 10px;
            text-align: center;
            color: #fff;
        }
        .card_cyber p{
            font-size: 1.5em;
            font-weight: 500;
        }
        .card_cyber  span{
            color: #EB2461;
        }
        .text_b{
            padding: 60px 10px;
            text-align: center;
        }
        .text_b p{
            font-size: 1.5em;
            font-weight: 500;
            color: var(--color-white);
            margin-bottom: 30px;
        }
        .text_b h3{
            font-size: 2em;
            color: var(--color-green);
            margin-bottom: 20px;
        }
        .sec_cursos_about{
            padding: 200px 10px;
        }
        .info_curso h2{
            font-size: 2.8em;
            font-weight: bold;
            margin-bottom: 40px;
        }
        .info_curso p, .info_curso ul{
            font-size: 1.5em;
        }
        h2.title_two{
            font-weight: 400!important;
        }
        .content_sec_cursos_about h2{
            font-weight: bolder;
            font-size: 2.8em;
            padding-left: 40px;
            margin-bottom: 40px;
        }
        .sec_cursos_about{
            background-image: url(https://accyber.com.br/wp-content/uploads/2023/04/bk-estastisticas-min.png);
        }
        .sec_cursos_about_two{
            padding-bottom: 300px;
        }
        .sec_cursos_about_two p{
            color: #ffffff;
            font-size: 1.5em;
        }
        .head_about_two{
            width: 100%;
        }
        .head_about_two h2{
            font-weight: bolder;
            font-size: 2.8em;
            padding-left: 40px;
            margin-bottom: 40px;
        }
        .right_about_two{
            padding: 10px;
        }
        .left_about_two img{
            width: 100%;
        }
        .left_about_two{
            padding: 20px;
            width: 750px;
            max-width: 800px;
            margin: auto;
        }
        .right_about_two{
            padding: 10px;
        }
        .video_frame{
            position: relative;
            height: 480px;
            width: 100%;
            padding: 20px;
            margin: auto;
            background-color: #473384;
            border-radius: 0;
        }
        .video_frame img{
            position: absolute;
            top: -20px;
            left: -50px;
            width: calc(100% + 80px);
            height: auto;
        }
        .video_frame iframe{
            width: 100%;
            height: 100%;
        }

        img.float_about_two{
            position: absolute;
            top: 150px;
            left: 0;
            width: 100%;
            z-index: -1;
        }
        .sec_cursos_about_two{
            background-image: url(https://accyber.com.br/wp-content/uploads/2023/04/bk-secao-video-min.png);
        }
        .sec_cursos_about_three{
            padding-bottom: 0;
            padding: 200px 0 0;
            background-image: url(https://accyber.com.br/wp-content/uploads/2023/04/bk-secao-moises-min.png);
            overflow: hidden;
        }
        .sec_cursos_about_three .content_sec_cursos_about header{
            width: 100%;
        }
        .sec_cursos_about_three .content_sec_cursos_about header h2{
            padding: 0;
        }
        .last_img{
            margin-top: -150px;
            position: relative;
        }
        .left_last_img{
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }
        .right_last_img{
            display: flex;
            justify-content: flex-end;
        }
        .right_last_img img{
            width: 150%;
            margin-top: -220px;
        }
        .content_sec_cursos_about_three p{
            margin-bottom: 40px;
            color: #ffffff;
            font-weight: 400;
            width: 100%;
            text-align: justify;
            font-size: 1.75em;
            width: 60%;
        }
        .content_sec_cursos_about_three h3{
            font-size: 2em;
            color: var(--color-pink);
            margin-bottom: 20px;
            width: 60%
        }
        .content_sec_cursos_about_three h4 span{
            font-size: 2em;
            color: var(--color-green);
            margin-bottom: 20px;
            width: 60%;
        }
        .content_sec_cursos_about_three ul{
            list-style: disc;
            width: 100%;
            margin-left: 40px;
            color: #ffffff;
            font-weight: 400;
            width: 100%;
            text-align: justify;
            font-size: 1.75em;
        }
        .content_sec_cursos_about_three h3.certificacoes{
            margin-top: 40px;
        }
        .btn_float_video{
            position: absolute;
            top: calc(50% - 125px);
            left: calc(50% - 125px);
            border: 15px solid #C0C4C7;
            padding: 20px;
            border-radius: 50%;
            width: 250px;
            height: 250px;
            background-color: transparent;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }
        .btn_float_video.pause{
            opacity: 0;
            transition: all .53s;
        }
        .btn_float_video.pause:hover{
            opacity: 0.7;
        }
        .btn_float_video::after{
            content: "\25BA";
            font-size: 200px;
            color: #C0C4C7;
            margin-left: 20px;
        }
        .btn_float_video.pause::after{
            content: "||";
            font-size: 180px;
            color: #C0C4C7;
            margin-left: 0;
        }
        .sec_cursos_about_three img.float_about_two{
            top: 50px;
            left: unset;
            right: 0;
            width: 80%;
        }
        .d-none{
            display: none!important;
        }

        @media(max-width: 1150px){
            .right_last_img img{
                width: 100%;
                margin-top: 150px;
            }
        }
        @media(max-width: 1024px){
            .last_img{
                margin-top: 0;
            }
            .left_last_img{
                flex-basis: 100%;
                justify-content: center;
            }
            .right_last_img{
                flex-basis: 100%;
            }
            .content_sec_cursos_about_three h3, .content_sec_cursos_about_three h4, .content_sec_cursos_about_three p{
                width: 100%;
            }
            .right_last_img img{
                margin-top: 20px;
            }
        }
        @media(max-width:820px){
            .right_head_cursos img{
                position: unset;
            }
            .f-50, .f-40, .f-60{
                flex-basis: 100%;
            }
            .btn_cta_curso img{
                max-width: 100%;
            }
        }

        @media(max-width: 768px){
            .content_left_header{
                max-width: 100%;
                padding-bottom: 0;
            }
            .left_header{
                padding-bottom: 50px;
            }
            .info_curso p, .info_curso ul{
                font-size: 1.2em;
            }
            .info_curso h2{
                font-size: 2.2em;
            }
            h2.title_two{
                width: 100%;
            }
            .left_boy_two{
                justify-content: center;
                margin-bottom: 50px;
            }
            .content_sec_cursos_about h2{
                font-size: 2.2em;
                padding-left: 0;
            }
            .card_cyber{
                flex-basis: calc(50% - 20px);
            }
            .left_header img{
                height: auto;
            }
            .left_header p{
                font-size: 1.2em;
                padding: 0  10px;
            }

            .last_img{
                margin-top: 0;
            }
            .f-45, .f-55{
                flex-basis: 100%;
            }
            .left_last_img{
                justify-content: center;
                padding: 20px 10px 40px;
            }
            .video_frame{
                height: 450px;
            }
        }
        @media(max-width: 700px){
            .video_frame{
                height: 400px;
            }
        }
        @media(max-width: 600px){
            .content_head_cursos{
                padding: 30px 10px 0;
            }
            .left_header img{
                margin-bottom: 20px;
            }
            .left_header p{
                margin-bottom: 20px;
            }
            .left_header{
                padding-bottom: 25px;
            }
            .btn_cta_curso img{
                width: 75%;
            }
            .info_curso h2{
                font-size: 1.8em;
            }
            .info_curso p, .info_curso ul{
                font-size: 1em;
            }
            .content_info_curso ul{
                margin-left: 20px;
            }
            .info_curso h2{
                font-size: 1.3em;
            }
            .img_boy_two img{
                margin-top: 0;
            }
            .left_boy_two{
                margin-bottom: 0;
                padding: 0;
            }
            .img_boy_two img{
                padding-bottom: 30px;
            }
            .info_curso h2{
                text-align: center;
            }
            .card_cyber{
                flex-basis: calc(100% - 20px);
            }
            .card_cyber p{
                font-size: 1.3em;
            }
            .text_b p{
                font-size: 1.1em;
            }
            .text_b h3{
                font-size: 1.5em;
            }
            .content_sec_cursos_about h2{
                font-size: 1.5em;
                text-align: center;
            }
            .content_sec_cursos_about_three p, .content_sec_cursos_about_three h3, .content_sec_cursos_about_three h4 span{
                font-size: 1.2em;
            }
            .sec_cursos_about_three{
                padding: 100px 0 0;
                position: relative;
            }
            .content_sec_cursos_about{
                padding: 60px 10px 20px;
            }
            .video_frame{
                height: 360px;
            }
            .btn_float_video{
                width: 200px;
                height: 200px;
                top: calc(50% - 100px);
                left: calc(50% - 100px);
            }
            .btn_float_video.pause::after{
                font-size: 150px;
            }
            .content_sec_cursos_about_three ul{
                font-size: 1.2em;
            }
        }
        @media(max-width: 550px){
            .video_frame{
                height: 320px;
            }
        }
        @media(max-width: 480px){
            .video_frame{
                height: 280px;
            }
            .btn_float_video{
                width: 150px;
                height:150px;
                top: calc(50% - 75px);
                left: calc(50% - 75px);
                border: 10px solid #C0C4C7;
            }
            .btn_float_video::after{
                font-size: 150px;
            }
            .btn_float_video.pause::after{
                font-size: 100px;
            }
        }
        @media(max-width: 420px){
            .left_about_two{
                padding: 0px;
            }
            .video_frame img{
                width: calc(100% + 40px);
                left: -30px;
                top: 0;
            }
            .video_frame{
                padding: 15px;
                height: 250px;
            }
            .sec_cursos_about_two{
                padding-top: 100px;
            }
        }
        @media(max-width: 375px){
            .video_frame{
                height: 220px;
            }
        }
    </style>
    <main>

        <section class="head_cursos" style="background-image: url(<?= get_template_directory_uri(); ?>/assets/img/bk-topo-min.jpg);">
            <div class=" content_head_cursos d-flex">
                <div class="f-50 left_header">

                    <div class="content_left_header">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/a-aula-1-caixa.png" alt="">

                        <p>Um treinamento desenvolvido para cuidar da segurança do bem mais precioso da sua empresa: <strong>seus dados</strong>.</p>

                        <a href="https://api.whatsapp.com/send?phone=551140639639&text=Ol%C3%A1.%20Quero%20mais%20informa%C3%A7%C3%B5es%20sobre%20a%20Aula%201" class="btn_cta_curso" target="_blank">
                            <img src="https://accyber.com.br/wp-content/uploads/2023/04/garanta-sua-vaga.png" alt="">
                        </a>
                    </div>
                    
                </div>
                <div class="f-50 right_head_cursos d-flex">
                    <div class="content_right_head_cursos">
                        <img src="https://accyber.com.br/wp-content/uploads/2023/04/hacker-1.png" alt="">
                    </div>
                    
                </div>
            </div>
        </section>

        <section class="info_curso">
            <div class=" content_info_curso">

                <div class="container">
                    <h2>SOBRE O CURSO</h2>

                    <p>Sua empresa possui algo mais valioso do que qualquer moeda do mundo: dados. E eles devem ser muito bem protegidos!</p>

                    <p>Pensando nisso, desenvolvemos um treinamento com aulas estilo TikTok: curtas, diretas e com uma linguagem simples, com um especialista que ensinará técnicas avançadas de proteção de dados para que você saiba identificar possíveis ameaças e esteja sempre protegido.</p>

                    <p>Elas são voltadas para empresas que querem garantir a segurança de suas informações para não sofrer perdas financeiras (irremediáveis), abordando temas como:</p>
                    
                    <ul>
                        <li>política de segurança e tipos de informação;</li>
                        <li>senhas e códigos;</li>
                        <li>segurança em sites, e-mails, mensagens e mídias sociais;</li>
                        <li>segurança para arquivos de mídia;</li>
                        <li>identificação de potenciais fraudes e privacidade,</li>
                    </ul>

                    <p><strong>e mais!</strong></p>

                    <h2 class="title_two">A forma mais eficaz de combater ameaças digitais <strong>está nas pessoas</strong></h2>

                </div>
                
                <div class="d-flex img_boy_two">
                    <div class="f-40 left_boy_two">
                        <a href="https://api.whatsapp.com/send?phone=551140639639&text=Ol%C3%A1.%20Quero%20mais%20informa%C3%A7%C3%B5es%20sobre%20a%20Aula%201" class="btn_cta_curso" target="_blank">
                            <img src="https://accyber.com.br/wp-content/uploads/2023/04/garanta-sua-vaga.png" alt="">
                        </a>
                    </div>
                    <div class="f-60 right_boy_two">
                        <div class="content_right_boy_two">
                            <img src="https://accyber.com.br/wp-content/uploads/2023/04/hacker-effect-min.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec_cursos_about">
            <div class="container content_sec_cursos_about">

                <h2>CYBERSEGURANÇA É PRIORIDADE</h2>
                
                <div class="d-flex">
                    <div class="card_cyber">
                        <img src="https://accyber.com.br/wp-content/uploads/2023/04/24-mil.png" alt="">
                        <p>variações de ransowares detectadas em 2022</p>
                        <p><span>fonte: Kapersky</span></p>
                    </div>
                    <div class="card_cyber">
                        <img src="https://accyber.com.br/wp-content/uploads/2023/04/31-milhoes.png" alt="">
                        <p>de tentativas de ataques à empresas brasileiras em 2022</p>
                        <p><span>fonte: CNN</span></p>
                    </div>
                    <div class="card_cyber">
                        <img src="https://accyber.com.br/wp-content/uploads/2023/04/6-trilhoes.png" alt="">
                        <p>de dólares perdidos por empresas brasileiras em 2022</p>
                        <p><span>fonte: securityreport</span></p>
                    </div>
                </div>

                <div class="text-center text_b">

                    <p>Amazon, Americanas, Mercado Livre, British, Airways... Todas elas perderam muita grana por causa de ataques cubernéticos bem sucedidos.</p>

                    <h3>Vai arriscar entrar nessa lista também</h3>

                </div>
                
            </div>
        </section>

        <section class="sec_cursos_about sec_cursos_about_two">

            <div class="container content_sec_cursos_about d-flex">

                <div class="left_about_two">
                    <div class="video_frame">
                        <div id="player"></div>

                        <img src="https://accyber.com.br/wp-content/uploads/2023/04/moldura-video-1.png " alt="" class="img_frame_video">
                        
                         <button class="btn_float_video" id="playButton" onclick="playVideo()"></button>
                         <button class="btn_float_video pause d-none" id="pauseButton" onclick="pauseVideo()"></button>
                    </div>
                </div>

            </div>
            <img src="https://accyber.com.br/wp-content/uploads/2023/04/efeito-hacker.png" alt="" class="float_about_two">
        </section>
        
        <section class="sec_cursos_about sec_cursos_about_three">

            <div class="container content_sec_cursos_about content_sec_cursos_about_three d-flex">

                <header class="head_about_three">
                    <h2>QUEM É MOISÉS MARGOTTO?</h2>
                </header>

                <p>Profissional da área de segurança da informação e CyberSec há mais de 20 anos, com certificações internacionais na área.</p>

                <h3>Quase 3 milhões de views no TIKTOK em apenas 1 vídeo</h3>

                <h4><span>Instrutor certificado há mais 10 anos</span></h4>

                <h3 class="certificacoes">Instrutor certificado há mais de 10 anos</h3>

                <ul>
                    <li>ISC2 CISSP;</li>
                    <li>ISC2 CCSP;</li>
                    <li>ISACA CISA;</li>
                    <li>ISACA CRISC;</li>
                    <li>Forrester ZeroTrust.</li>
                </ul>
                
            </div>

            <div class="d-flex last_img">

                <div class="f-40 left_last_img">
                    <a href="https://api.whatsapp.com/send?phone=551140639639&text=Ol%C3%A1.%20Quero%20mais%20informa%C3%A7%C3%B5es%20sobre%20a%20Aula%201" class="btn_cta_curso" target="_blank">
                        <img src="https://accyber.com.br/wp-content/uploads/2023/04/garanta-sua-vaga.png" alt="">
                    </a>
                </div>

                <div class="f-60 right_last_img">
                    <img src="https://accyber.com.br/wp-content/uploads/2023/04/moises-min.png" alt="">
                </div>
                
                <img src="https://accyber.com.br/wp-content/uploads/2023/04/efeito-hacker.png" alt="" class="float_about_two">
            </div>

        </section>

    </main>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script>
        function onYouTubeIframeAPIReady() {
            var player = new YT.Player('player', {
                videoId: 'LRhRWdjlows',
                playerVars: {
                    controls: 0
                }
            });
        }

        function playVideo() {
            var player = document.getElementById('player').contentWindow;
            player.postMessage('{"event":"command","func":"playVideo","args":""}', '*');
        }

        function pauseVideo() {
            var player = document.getElementById('player').contentWindow;
            player.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
        }

        document.getElementById('playButton').addEventListener('click', () => {

            document.getElementById('playButton').classList.add('d-none');
            document.getElementById('pauseButton').classList.remove('d-none')

        });

        document.getElementById('pauseButton').addEventListener('click', () => {

            document.getElementById('pauseButton').classList.add('d-none');
            document.getElementById('playButton').classList.remove('d-none')
        });

    </script>
    <?php get_footer() ?>

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

                        <?php

                            $shortcut_do_formulario = get_field('shortcut_do_formulario');
                            $email_contato = get_field('email_contato');

                            if(!empty($shortcut_do_formulario)):
                                
                                echo do_shortcode($shortcut_do_formulario);

                            else:

                        ?>

                        <form action="">
                            <div id="retorno_form_home" style="color: yellow; font-size: .9em"></div>
                            <input type="text" name="contatoName" id="contatoName" placeholder="Nome" required>
                            <input type="email" name="contatoEmail" id="contatoEmail" placeholder="E-mail" required>
                            <input type="text" name="contatoTelefone" id="contatoTelefone" placeholder="Telefone/whatsapp">
                            <textarea name="contatoMsg" id="contatoMsg" cols="30" rows="3" placeholder="Mensagem..."></textarea>

                            <input type="submit" value="Enviar" id="btn_contato">
                        </form>
                        
                        <?php endif; ?>

                    </div>

                </div>
            </div>
        </section>
    </main>

<script>

document.addEventListener('DOMContentLoaded', () => {
    const img_form = document.querySelector('.form_over .img_form_over');
    const form_contact = document.querySelector('.form_over form');
    let height_img_form = img_form.getBoundingClientRect().height;
    form_contact.style.height = height_img_form+"px";
    console.log(height_img_form);
})

let current_width = window.innerWidth;

window.addEventListener('resize', (e) => {
    console.log(current_width);
    if(window.matchMedia('(max-width: 768px').matches){
        
        form_contact.style.height = 'unset';
        
    }else{
        let height_img_form = img_form.getBoundingClientRect().height;
        form_contact.style.height = height_img_form+"px";
    }
    
});




//================================= form contato ======================================================
const btn_contato = document.getElementById('btn_contato');

if(btn_contato){
    btn_contato.addEventListener('click', function(e){


    let nameForm = document.getElementById('contatoName').value;
    let contatoEmail = document.getElementById('contatoEmail').value;
    let contatoTelefone = document.getElementById('contatoTelefone').value;
    let msgForm = document.getElementById('contatoMsg').value;

    if(nameForm == "" || contatoEmail == ""){
        if(nameForm == ""){
            document.getElementById('contatoName').style.border = "1px solid red"
        }
        if(contatoEmail == ""){
            document.getElementById('contatoEmail').style.border = "1px solid red"
        }

        setTimeout(function(){
            
            document.getElementById('contatoName').style.border = "1px solid #ffffff";
            document.getElementById('contatoEmail').style.border = "1px solid #ffffff";
            document.getElementById('contatoTelefone').style.border = "1px solid #ffffff";
            document.getElementById('contatoMsg').style.border = "1px solid #ffffff";
            
        }, 1500)
    }else{

        e.preventDefault();

        this.innerText = "Enviando...";
        this.value = 'Enviando...';
        this.desabled = true;
        
        $.ajax({
            method: 'POST',
            url: 'https://formsubmit.co/ajax/<?= $email_contato; ?>',
            dataType: 'json',
            accepts: 'application/json',
            data: {
                _subject: "Contato do site accyber",
                Nome: nameForm,
                Email: contatoEmail,
                Telefone: contatoTelefone,
                mensagem: msgForm
            },
            success: (data) => {
                console.log(data);
                document.getElementById('retorno_form_home').innerText = "Em breve entraremos em contato";
                setTimeout(function(){
                    document.getElementById('retorno_form_home').innerText = "";
                }, 3000);
                this.innerText = "Enviar";
                this.value = "Enviar";
                this.desabled = false

                document.getElementById('contatoName').value = "";
                document.getElementById('contatoEmail').value = "";
                document.getElementById('contatoTelefone').value = "";
                document.getElementById('contatoMsg').value = "";

            },
            error: (err) => {
                console.log(err);
                document.getElementById('retorno_form_home').innerText = err;

                document.getElementById('contatoName').value = "";
                document.getElementById('contatoEmail').value = "";
                document.getElementById('contatoTelefone').value = "";
                document.getElementById('contatoMsg').value = "";
            }
        });

    }


    })
}


</script>
<?php get_footer(); ?>
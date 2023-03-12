const els = document.querySelectorAll('.isonscreen');
const girl_img = document.querySelector('.sec_girl_right img');
const sec_girl = document.querySelector('.sec_girl');
const title_sec_girl = document.querySelector('.title_sec_girl');
const card_course = document.querySelectorAll('.card_course');
const curso_right_img = document.querySelector('.curso_right img');
const header_curso = document.querySelector('.header_curso');
const sec_universo = document.querySelector('.sec_universo');
const btn_boy = document.querySelector('.btn_boy');
const btn_top_girl = document.querySelector('.btn_top_girl');
const img_group = document.querySelectorAll('.img_group img');

//function to verify if element is on screen
function isOnScreen(el){
    let rect = el.getBoundingClientRect();
    return rect.top > 0 && rect.bottom < window.innerHeight;
}

let up_img = 150; //para controlar o movimento da imagem
let up_img2 = 200; //para controlar o movimento da imagem
let lastScroll = 0;
let lastScroll2 = 0;

els.forEach((item) => {

    if(isOnScreen(item)){
        item.classList.add( 'animate__animated', 'animate__bounceIn');
        item.style.setProperty('--animate-delay', '2s')
        item.style.setProperty('--animate-duration', '1s');
    }

});

document.addEventListener('scroll', (e) => {
    els.forEach((item) => {

        if(isOnScreen(item)){
            item.classList.add( 'animate__animated', 'animate__bounceIn');
            item.style.setProperty('--animate-delay', '2s')
            item.style.setProperty('--animate-duration', '1s');
        }
    
    });
    card_course.forEach((item) => {
        if(isOnScreen(item)){
            item.classList.add( 'animate__animated', 'animate__zoomInDown');
            item.style.setProperty('--animate-delay', '2s')
            item.style.setProperty('--animate-duration', '.7s');
            item.classList.remove('opa-0')
        }
    });
    if(isOnScreen(btn_top_girl)){
        //console.log('window scroll: '+window.scrollY);
        if(window.scrollY > lastScroll){
            console.log('abaixando');
            if(up_img > 0){
                up_img -= 5;
                girl_img.style.transform = "translateY("+up_img+"px)";
            }
        }else{
            console.log('subindo');
            if(up_img < 150){
                up_img += 5;
                girl_img.style.transform = "translateY("+up_img+"px)";
            }
        }   
    }

    lastScroll = window.scrollY;

    if(isOnScreen(btn_boy)){
        console.log('is on')
        if(window.scrollY > lastScroll2){
            console.log('abaixando 222');
            if(up_img2 > 0){
                
                up_img2 -= 6;
                curso_right_img.style.transform = "translateY("+up_img2+"px)";
            }
        }else{
            console.log('subindo 222');
            if(up_img2 < 200){
                up_img2 += 5;
                curso_right_img.style.transform = "translateY("+up_img2+"px)";
            }
        }   
    }

    lastScroll2 = window.scrollY;

    if(isOnScreen(document.querySelector('.img_first_group'))){
        document.querySelector('.img_first_group').classList.add( 'animate__animated', 'animate__zoomIn');
        document.querySelector('.img_first_group').style.setProperty('--animate-delay', '1s')
        document.querySelector('.img_first_group').style.setProperty('--animate-duration', '1s');
        document.querySelector('.img_first_group').classList.remove('opa-0')
    }
    if(isOnScreen(document.querySelector('.img_second_group'))){
        document.querySelector('.img_second_group').classList.add( 'animate__animated', 'animate__zoomIn');
        document.querySelector('.img_second_group').style.setProperty('--animate-delay', '2s')
        document.querySelector('.img_second_group').style.setProperty('--animate-duration', '1s');
        document.querySelector('.img_second_group').classList.remove('opa-0')
    }
    if(isOnScreen(document.querySelector('.img_third_group'))){
        document.querySelector('.img_third_group').classList.add( 'animate__animated', 'animate__zoomIn');
        document.querySelector('.img_third_group').style.setProperty('--animate-delay', '3s')
        document.querySelector('.img_third_group').style.setProperty('--animate-duration', '1s');
        document.querySelector('.img_third_group').classList.remove('opa-0')
    }
    if(isOnScreen(document.querySelector('.img_fourth_group'))){
        document.querySelector('.img_fourth_group').classList.add( 'animate__animated', 'animate__zoomIn');
        document.querySelector('.img_fourth_group').style.setProperty('--animate-delay', '4s')
        document.querySelector('.img_fourth_group').style.setProperty('--animate-duration', '1s');
        document.querySelector('.img_fourth_group').classList.remove('opa-0')
    }
    if(isOnScreen(document.querySelector('.img_fifth_group'))){
        document.querySelector('.img_fifth_group').classList.add( 'animate__animated', 'animate__zoomIn');
        document.querySelector('.img_fifth_group').style.setProperty('--animate-delay', '5s')
        document.querySelector('.img_fifth_group').style.setProperty('--animate-duration', '1s');
        document.querySelector('.img_fifth_group').classList.remove('opa-0')
    }
    if(isOnScreen(document.querySelector('.img_sixth_group'))){
        document.querySelector('.img_sixth_group').classList.add( 'animate__animated', 'animate__zoomIn');
        document.querySelector('.img_sixth_group').style.setProperty('--animate-delay', '6s')
        document.querySelector('.img_sixth_group').style.setProperty('--animate-duration', '1s');
        document.querySelector('.img_sixth_group').classList.remove('opa-0')
    }
    if(isOnScreen(document.querySelector('.img_seventh_group'))){
        document.querySelector('.img_seventh_group').classList.add( 'animate__animated', 'animate__zoomIn');
        document.querySelector('.img_seventh_group').style.setProperty('--animate-delay', '7s')
        document.querySelector('.img_seventh_group').style.setProperty('--animate-duration', '1s');
        document.querySelector('.img_seventh_group').classList.remove('opa-0')
    }

})
    



//===================== menu mobile control =========================================
const btn_mobile = document.querySelector('.btn_mobile'); //botao menu mobile
const btn_close_menu = document.querySelector('.btn_close_menu'); //botao close menu mobile
const nav_menu = document.querySelector('nav.menu');//menu

btn_mobile.addEventListener('click', () => {
    nav_menu.classList.add('open_menu_mobile');
});
btn_close_menu.addEventListener('click', () => {
    nav_menu.classList.remove('open_menu_mobile');
});
//===================== menu mobile control =========================================
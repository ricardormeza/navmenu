
function temaalkimia(){
    // alert('funciona');
    if(document.querySelector('.swiper')){
        const opciones = {
            loop: true,
            autoplay:{
                delay:3000
            }
        }
        new  Swiper('.swiper', opciones);
    }


    // MENU HAMBURGUESA
    const hamburger = document.querySelector('.burguer-menu svg')
    hamburger.addEventListener( 'click', function(){
        
    } )

document.addEventListener('DOMContentLoaded', temaalkimia);
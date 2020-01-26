import './scss/new.scss';

window.addEventListener('DOMContentLoaded', ()=>{

    //Боковое меню
    var sideBlock = document.querySelector('.side-menu'),
        sideMenu = document.querySelector('.side-menu__menu');

    sideMenu.style.display = 'none';

    sideBlock.addEventListener('mouseover', function () {
        sideMenu.style.display = '';
        setTimeout(()=>{sideMenu.classList.add('side-menu__menu__active')},0);
    });
    sideBlock.addEventListener('mouseleave', function () {
        sideMenu.classList.remove('side-menu__menu__active');        
        setTimeout(()=>{sideMenu.style.display = 'none';},100);
    });
    sideMenu.addEventListener('mouseover', function () {
        sideMenu.style.display = '';
        setTimeout(()=>{sideMenu.classList.add('side-menu__menu__active')},0);
    });
    
    //Мобильное меню
    let menuIcon = document.querySelector('.mobile-menu__icon'),
        closeIcon = document.querySelector('.mobile-menu__close'),
        menuBlock = document.querySelector('.mobile-menu__wrapper');

    menuIcon.addEventListener('click', ()=>{
        menuBlock.classList.toggle('mobile-menu__wrapper__active');
    });
    closeIcon.addEventListener('click', ()=>{
        menuBlock.classList.toggle('mobile-menu__wrapper__active');
    });
    
     // Затемнение иконок + хедер главной страницы
    let socIcons = document.querySelectorAll('.socials-icon img'),
        cartIcon = document.querySelectorAll('.cart-icon .fa-shopping-cart'),
        cartLink = document.querySelectorAll('.cart-icon a'),
        mainHeader = document.querySelectorAll('header.main-header');

    if(document.location.pathname !== '/'){

        socIcons.forEach(img => {
            img.classList.add('socials-dark');
        });

        cartIcon[0].classList.add('icon-dark');

        cartLink[0].classList.add('link-dark');

    } 
    
    // форма 
    let formOverlay = document.querySelector('.form-overlay'),
        formClose = document.querySelector('.form-close'),
        formButtons = document.querySelectorAll('.forms-button .elementor-button');

    formButtons.forEach(form => {
        form.addEventListener('click', ()=>{
            formOverlay.style.display = 'flex';
            setTimeout(()=>formOverlay.classList.add('form-overlay__visible'), 100);
        });
    });

    formClose.addEventListener('click', ()=>{
        formOverlay.classList.remove('form-overlay__visible');
        setTimeout(()=>formOverlay.style.display = '', 100);
        
    });

    formOverlay.addEventListener('click', (e)=>{
        if(e.target.classList.contains('form-overlay')){
            formOverlay.classList.remove('form-overlay__visible');
            setTimeout(()=>formOverlay.style.display = '', 100);
        }
    });
    
    // Линии
    if(document.location.origin === 'http://www.host1712641.hostland.pro' && document.location.pathname === '/'){
         let buttonMainScreen = document.querySelector('.forms-button .elementor-button'),
            emptyEl = document.querySelector('header .empty'),
            emptySmall = document.querySelector('header .empty-small'),
            emptyBig = document.querySelector('header .empty-big'),
            socAndCart = document.querySelector('.socials-and-cart');

        socAndCart.classList.add('socials-and-cart__bordered');
        emptyEl.style.display = "block";
        emptySmall.style.width = buttonMainScreen.getBoundingClientRect().left - emptyEl.getBoundingClientRect().left - emptyEl.offsetWidth + 'px';
        emptyBig.style.left = buttonMainScreen.getBoundingClientRect().left - emptyEl.getBoundingClientRect().left + buttonMainScreen.offsetWidth  + 'px';
        emptyBig.style.width = document.body.offsetWidth - (buttonMainScreen.getBoundingClientRect().left + buttonMainScreen.offsetWidth) + 'px';   
    }
});
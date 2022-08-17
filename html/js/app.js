var mobilemenu = document.getElementById('mobilemenu');
var menu_ovarlay = document.getElementById('menu_ovarlay')
function hamclick(){    
    mobilemenu.classList.add('active');
    menu_ovarlay.classList.add('active');
}

function mobile_menu_close(){
    mobilemenu.classList.remove('active');
    menu_ovarlay.classList.remove('active');
}

jQuery(document).ready(function ($) {
    $('.bannersection').owlCarousel({
        items: 1,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        loop: true,
        margin: 10,
        nav: true,
    });
    $('.custom1').owlCarousel({
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        items: 1,
        margin: 30,
        stagePadding: 30,
        smartSpeed: 450
    });
    $('.blogslide').owlCarousel({
        margin: 20,
        nav: false,
        dots: false,
        items: 3,
        lazyLoad: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            },
            1200: {
                items: 3,
                margin: 25
            },
            1920: {
                items: 3,
                margin: 48
            },
            2500: {
                items: 3,
                margin: 48
            },
        }
    });
    $('.productslide').owlCarousel({
        margin: 30,
        nav: false,
        dots: false,
        items: 3,
        lazyLoad: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            },
            1200: {
                items: 3,
                margin: 35
            },
            1920: {
                items: 3,
                margin: 58
            },
            2500: {
                items: 3,
                margin: 58
            },
        }
    });

    $('.testimonialslide').owlCarousel({
        margin: 10,
        nav: true,
        items: 1,
        lazyLoad: true,
        nav: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
            },
            1200: {
                items: 1,
            },
        }
    });

    $('.whyussection').owlCarousel({
        margin:10,
        nav:false,
        items: 5,
        lazyLoad: true,
        nav:true,
        responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
        1000:{
            items:4,
        },
        1200:{
            items:4,
        },
        }
    });

});


var form_on_click = document.getElementById('form_on_click');

function formclick(){    
    form_on_click.classList.add('active');
}
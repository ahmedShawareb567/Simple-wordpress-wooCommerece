
//DEFINE CAROUSEL
jQuery(function ($) {
    $('#owl-one').owlCarousel({
        loop: true,
        autoplay: true,
        loop: true,
        margin: 10,
        responsiveClass: true,
        nav: false,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            300: {
                items: 2,
            },
            600: {
                items: 3,
                nav: true
            },
            1000: {
                items: 4,
                nav: true
            }
        }
    });
});

//BUTTON OF MENU
let mainButton = document.querySelector('.navbar-toggler');
mainButton.addEventListener('click', () => {
    mainButton.classList.toggle('button-active');
});
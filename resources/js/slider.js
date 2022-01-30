(function($) {
    $( document ).ready(function() {
        'use strict';
        const slider_enable = sessionStorage.getItem('slider_enable') == 'true';
        var timeout = 5000;
        if(!slider_enable){
            timeout = 42000;
        }
        const swiper = new Swiper('.js-main-slider', {
            loop: true,
            allowTouchMove: false,
            autoplay: {
                delay: timeout,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    });
})(jQuery);

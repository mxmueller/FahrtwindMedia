require('./bootstrap');

ScrollReveal().reveal('.navigation', {
    delay: 200
});
ScrollReveal().reveal('.cc_headline_scroll_1', {
    delay: 500
});
ScrollReveal().reveal('.cc_headline_scroll_2', {
    delay: 800
});

ScrollReveal().reveal('.cc_conversation_banner-wrapper', {
    delay: 1000
});

$(document).ready(function () {
    $(".cc_arrow-icon").click(function () {
        $('html,body').animate({
                scrollTop: $(".cc_intro-text").offset().top
            },
            'slow');
    });

    VANTA.NET({
        el: '#cc_vantajs-bg',
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.00,
        scaleMobile: 1.00,
        color: 0xff9068,
        backgroundColor: 0xe8e8e8,
        points: 13.00,
        maxDistance: 25.00,
        spacing: 20.00
    })

});



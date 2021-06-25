$(document).ready(function () {
    ScrollReveal().reveal('.cc_headline_scroll_1', {
        delay: 500
    });
    ScrollReveal().reveal('.cc_headline_scroll_2', {
        delay: 800
    });

    ScrollReveal().reveal('.cc_conversation_banner-wrapper', {
        delay: 1000
    });

    ScrollReveal().reveal('.cc_a_1', {
        delay: 100
    });

    ScrollReveal().reveal('.cc_a_2', {
        delay: 200
    });

    ScrollReveal().reveal('.cc_a_3', {
        delay: 300
    });

    ScrollReveal().reveal('.cc_a_4', {
        delay: 400
    });

    ScrollReveal().reveal('.cc_a_5', {
        delay: 500
    });

    ScrollReveal().reveal('.cc_a_6', {
        delay: 600
    });

    ScrollReveal().reveal('.cc_a_7', {
        delay: 1000
    });

    ScrollReveal().reveal('.cc_a_8', {
        delay: 1100
    });

    ScrollReveal().reveal('.cc_a_9', {
        delay: 1200
    });

    $(".cc_arrow-icon").click(function () {
        $('html,body').animate({
                scrollTop: $(".cc_jump-to-article").offset().top
            },
            'slow');
    });

    VANTA.WAVES({
        el: '#cc_vantajs-bg',
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.00,
        scaleMobile: 1.00,
        color: 0xacacac,
        shininess: 99.00,
        waveHeight: 22.50,
        waveSpeed: 0.80,
        zoom: 0.65
    })
});

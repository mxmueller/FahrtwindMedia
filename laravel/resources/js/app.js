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

ScrollReveal().reveal('.cc_intro-text', {
    delay: 800
});

$(document).ready(function () {
    $(".cc_arrow-icon").click(function () {
        $('html,body').animate({
                scrollTop: $(".cc_intro-text").offset().top
            },
            'slow');
    });
});

window.
onload
    = function () {
        Particles.init({
            // normal options
            selector: '.background',
            maxParticles: 100,
            connectParticles: true,
            speed: 0.2,
            color: '#7d7d7d',
            // options for breakpoints
            responsive: [{
                breakpoint: 768,
                options: {
                    maxParticles: 60,
                    connectParticles: true
                }
            }, {
                breakpoint: 425,
                options: {
                    maxParticles: 20,
                    connectParticles: true
                }
            }, {
                breakpoint: 320,
                options: {
                    maxParticles: 0
                    // disables particles.js
                }
            }]
        });
    };

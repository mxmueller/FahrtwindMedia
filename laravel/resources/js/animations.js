$(document).ready(function () {
  
    // auto scroll arow
    $(".cc_arrow-icon").click(function () {
        $('html,body').animate({
                scrollTop: $(".cc_jump-to-article").offset().top
            },
            'slow');
    });

    // big fancy wavy background /home
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

    // animate lib
    AOS.init();
});

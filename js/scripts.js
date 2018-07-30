$(document).ready(function () {

    // Menu Burger

    $(".burger").sidr({
        name: "respNav",
        source: ".main-nav",
        displace: false,
    });

    $(document).on("click", function () {
        $.sidr('close', 'respNav');
    });

    // Carousel

    $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        navtext: ['Précédent', 'Suivant'],
        dots:false,
        autoplay: true,
        autoplaySpeed: 700,
        autoplayHoverPause: true,
    });

});
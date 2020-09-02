$(document).ready(function () {
    $("#navbar").bootnavbar();

    $(".menu-icon").click(function () {
        $(".menu-icon").toggleClass("active");
    });

    $("#banner-area .owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000
    });
    $("#gallery-area .owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000
    });
    $("#testimonal-area .owl-carousel").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    $('#school-gallery .gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled: true
        }
    });
});
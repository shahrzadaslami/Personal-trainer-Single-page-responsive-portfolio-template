$(document).ready(function () {

    $('#feed').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })


    $("#team").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },

            600: {
                items: 2
            },
            1000: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    });


});
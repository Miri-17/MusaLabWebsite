$(document).ready(function(){
    // デバッグ用
    $('.slider').on('breakpoint', function(breakpoint) {
        console.log(breakpoint);
    });

    $('.slider').slick({
        respondTo: 'slider',
        autoplay: true,
        arrows: true,
        prevArrow: '<div class="slick-prev"></div>',
        nextArrow: '<div class="slick-next"></div>',
        dots: true,
        dotsClass: 'slide-dots',
        pauseOnFocus: false,
        pauseOnHover: false,
        centerMode: true,
        centerPadding: '20%',
        responsive: [{
            breakpoint: 1000,
            settings: {
                centerMode: false,
                centerPadding: '50px',
            }
        }, {
            breakpoint: null,
            settings: {
                centerMode: true,
                centerPadding: '20%',
            }
        }]
    });
});

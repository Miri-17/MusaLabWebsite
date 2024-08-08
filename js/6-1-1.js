$(document).ready(function(){
    $('.slider').on('breakpoint', function(breakpoint) {
        // デバッグ用
        console.log(breakpoint);
    });

    $('.slider').slick({
        respondTo: 'slider',
        arrows: true,
        autoplay: true,
        dots: true,
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

// index.html
// Slider
$('.slider').on('breakpoint', function(breakpoint) {
    // デバッグ用
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

// 全て
// ページのトップへスクロール
$('#arrow-up').click(function () {
    $('body, html').animate({
        scrollTop: 0
    }, 500); //ページトップスクロールの速さ
    return false; //リンク自体の無効化
});

// archive.html
window.addEventListener('load', function() {    
    function handleFocus() {
        this.placeholder = 'キーワードで検索！';
    }
    function handleBlur() {
        this.placeholder = '';
        this.value = '';
    }

    const searchText = document.getElementById('search-text');
    if (!searchText) { return false; }
    
    searchText.addEventListener('focus', handleFocus);
    searchText.addEventListener('blur', handleBlur);
});

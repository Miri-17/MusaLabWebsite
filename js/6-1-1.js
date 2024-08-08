function setSlidesToShow() {
    if (window.innerWidth >= 1000) {
        return 2;
    } else {
        return 1;
    }
}

$('.hero').slick({
    autoplay: true, // 自動的に動き出すか (初期値: false)
    dots: true,
    slidesToShow: setSlidesToShow(),
});

$(window).resize(function() {
    $('.hero').slick('slickSetOption', 'slidesToShow', setSlidesToShow(), true);
});

// $('.slider').slick({
//     autoplay: true,                                 // 自動的に動き出すか (初期値: false)
//     autoplaySpeed: 3000,                            // 次のスライドに切り替わるまでの時間
//     speed:1000,                                     // スライドするスピード (初期値: 300)
//     infinite: true,                                 // スライドをループさせるか (初期値: true)
//     slidesToShow: 1,                                // 1度に表示するスライド数 (初期値: 1)
//     slidesToScroll: 1,                              // 1回のスライドで移動するスライド数 (初期値: 1)
//     arrows: true,                                   // 左右の矢印を付けるか
//     prevArrow: '<div class="slick-prev"></div>',    // 「前へ」の矢印をカスタムHTMLで変更
//     nextArrow: '<div class="slick-next"></div>',    // 「次へ」の矢印をカスタムHTMLで変更
//     dots: true,                                     // 下部のドットナビゲーションを表示するか
//     pauseOnFocus: false,                            // フォーカスで一時停止するか
//     pauseOnHover: false,                            // マウスホバーで一時停止するか
//     pauseOnDotsHover: false,                        // ドットナビゲーションをマウスホバーした時に一時停止するか
// });

// // スマホ用: スライダーをタッチしても止めずにスライドをさせたい場合
// $('.slider').on('touchmove', function(event, slick, currentSlide, nextSlide) {
//     $('.slider').slick('slickPlay');
// });
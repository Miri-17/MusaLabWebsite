$('#arrow-up').click(function () {
    $('body, html').animate({
        scrollTop: 0
    }, 500); // ページトップまでのスクロールを速くしたければ数字を大きくしてください
    return false;
});

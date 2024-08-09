// 画面遷移時にギャラリーの画像が被らないように、すべての読み込みが終わった後に実行する
$(window).on('load',function(){
    // Muuriのプラグイン設定
    // document.addEventListener('DOMContentLoaded', function() {
        var grid = new Muuri('.grid', {
            // アイテムの表示速度
            showDuration: 600,
            showEasing: 'cubic-bezier(0.215, 0.61, 0.355, 1)',
            hideDuration: 600,
            hideEasing: 'cubic-bezier(0.215, 0.61, 0.355, 1)',
                
            // アイテムの表示 / 非表示状態のスタイル
            visibleStyles: {
                opacity: '1',
                transform: 'scale(1)',
            },
            hiddenStyles: {
                opacity: '0',
                transform: 'scale(0.5)',
            },
        });
    // });
    
    // 並び替えボタン設定
    $('.btn-sort ul li').on('click',function() {
        // クリックしたボタンのクラス名を取得
        var className = $(this).attr('class');
        //「.sort-btn ul li」のクラス名を分割して配列にする
        className = className.split(' ');

        if ($(this).hasClass('active')) {	
            if(className[0] != 'all') {
                $(this).removeClass('active');
                var selectElements = $('.btn-sort ul li.active');
                if (selectElements.length == 0) {
                    $(".btn-sort ul li.all").addClass('active');
                    grid.show('');
                } else {
                    filterDo();
                }
            }	
        } else {
            if (className[0] == 'all') {
                $('.btn-sort ul li').removeClass('active');
                $(this).addClass('active');
                grid.show('');
            } else {
                if ($('.all').hasClass('active')) {
                    $('.btn-sort ul li.all').removeClass('active');
                }
                $(this).addClass('active');
                filterDo();
            }
        }
    });
    
    // 画像の並び替え設定
    function filterDo(){
        var selectElements = $('.btn-sort ul li.active');
        // チェックの付いたクラス名のリスト
        var selectElementsList = [];
        $.each(selectElements, function(index, selectElm) {
            var className = $(this).attr('class');
            className = className.split(' ');
            selectElementsList.push('.'+className[0]);
        })
        str = selectElementsList.join(',');
        grid.filter(str);
    }
});
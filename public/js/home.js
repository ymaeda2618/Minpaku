/** Author y_maeda
 *********************************
 ***
 *** toppage js
 ***
 *********************************
 **  変更履歴
 ** -------------------------------
 ** 2020-01-04 y_maeda 新規作成
 **
 ** --------------------------------*/

jQuery(function($) {

    //--------------
    // loading処理
    //-------------
    var h = $(window).height(); // ブラウザウィンドウの高さを取得する
    $('#main-area').css('display', 'none'); // コンテンツを非表示にする

    // ページ読み込み完了したときの処理
    $(window).on('load', function() {

        //--------------
        // loading処理
        //-------------
        $('#loading-wrapper').css('display', 'none');
        $('#main-area').css('display', 'block');

        $(".slider")
            // 最初のスライドに"add-animation"のclassを付ける(data-slick-index="0"が最初のスライドを指す)
            .on("init", function() {
                $('.slick-slide[data-slick-index="0"]').addClass("add-animation");
            })
            // 通常のオプション
            .slick({
                autoplay: true, // 自動再生ON
                fade: true, // フェードON
                arrows: false, // 矢印OFF
                speed: 2000, // スライド、フェードアニメーションの速度2000ミリ秒
                autoplaySpeed: 4000, // 自動再生速度4000ミリ秒
                pauseOnFocus: false, // フォーカスで一時停止OFF
                pauseOnHover: false, // マウスホバーで一時停止OFF
            })
            .on({
                // スライドが移動する前に発生するイベント
                beforeChange: function(event, slick, currentSlide, nextSlide) {
                    // 表示されているスライドに"add-animation"のclassをつける
                    $(".slick-slide", this).eq(nextSlide).addClass("add-animation");
                    // あとで"add-animation"のclassを消すための"remove-animation"classを付ける
                    $(".slick-slide", this).eq(currentSlide).addClass("remove-animation");
                },
                // スライドが移動した後に発生するイベント
                afterChange: function() {
                    // 表示していないスライドはアニメーションのclassを外す
                    $(".remove-animation", this).removeClass(
                        "remove-animation add-animation"
                    );
                },
            });
    });

    // スクロールしたときの処理
    $(window).scroll(function() {

    });


});

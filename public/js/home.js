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
    // フェードインで使う変数を定義
    //-------------
    // トップメッセージエリア
    var top_concept_text_top;

    // cottageエリア
    var cottage_img_area_top;
    var cottage_sub_title_top;
    var cottage_title_top;
    var cottage_text_top;

    // restingエリア
    var resting_img_area_sp_top;
    var resting_img_area_pc_top;
    var resting_sub_title_top;
    var resting_title_top;
    var resting_text_top;

    // saunaエリア
    var sauna_img_area_top;
    var sauna_sub_title_top;
    var sauna_title_top;
    var sauna_text_top;

    // mapエリア
    var map_area_top;

    // informationエリア
    var top_info_hdg;
    var top_info_table;

    // 予約ボタンエリア
    var reserve_title;
    var reserve_text_area;
    var reserve_btn_area;

    //--------------
    // loading処理
    //-------------
    var h = $(window).height(); // ブラウザウィンドウの高さを取得する
    $('#main-area').css('display', 'none'); // コンテンツを非表示にする

    //--------------
    // head画像
    //-------------
    var head_text = $('.top-text-area');

    // ページ読み込み完了したときの処理
    $(window).on('load', function() {

        //--------------
        // loading処理
        //-------------
        $('#loading-wrapper').css('display', 'none');
        $('#main-area').css('display', 'block');

        //--------------
        // head画像
        //-------------
        head_text.addClass("entry-SlideUp");
        //--------------
        // トップページのスライダー処理
        //-------------
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

        //--------------
        // アルバムのスライダー処理
        //-------------
        $('.slider-album').slick({
            autoplay: true, // 自動でスクロール
            autoplaySpeed: 0, // 自動再生のスライド切り替えまでの時間を設定
            speed: 5000, // スライドが流れる速度を設定
            cssEase: "linear", // スライドの流れ方を等速に設定
            slidesToShow: 4, // 表示するスライドの数
            swipe: false, // 操作による切り替えはさせない
            arrows: false, // 矢印非表示
            pauseOnFocus: false, // スライダーをフォーカスした時にスライドを停止させるか
            pauseOnHover: false, // スライダーにマウスホバーした時にスライドを停止させるか
            responsive: [{
                breakpoint: 750,
                settings: {
                    slidesToShow: 3, // 画面幅750px以下でスライド3枚表示
                }
            }]
        });

        //--------------
        // フェードインで使う各コンテンツのtopを取得
        //-------------
        // トップメッセージエリア
        top_concept_text_top = $('.top-concept-text').offset().top;

        // cottageエリア
        cottage_img_area_top = $('.cottage-img-area').offset().top;
        cottage_sub_title_top = $('.cottage-sub-title').offset().top;
        cottage_title_top = $('.cottage-title').offset().top;
        cottage_text_top = $('.cottage-text').offset().top;

        // restingエリア
        resting_img_area_sp_top = $('.resting-img-area-sp').offset().top;
        resting_img_area_pc_top = $('.resting-img-area-pc').offset().top;
        resting_sub_title_top = $('.resting-sub-title').offset().top;
        resting_title_top = $('.resting-title').offset().top;
        resting_text_top = $('.resting-text').offset().top;

        // saunaエリア
        sauna_img_area_top = $('.sauna-img-area').offset().top;
        sauna_sub_title_top = $('.sauna-sub-title').offset().top;
        sauna_title_top = $('.sauna-title').offset().top;
        sauna_text_top = $('.sauna-text').offset().top;

        // mapエリア
        map_area_top = $('.map-area').offset().top;

        // informationエリア
        top_info_hdg = $('.top-info-hdg').offset().top;
        top_info_table = $('.top-info-table').offset().top;

        // 予約ボタンエリア
        reserve_title = $('.reserve-title').offset().top;
        reserve_text_area = $('.reserve-text-area').offset().top;
        reserve_btn_area = $('.reserve-btn-area').offset().top;


    });

    // スクロールしたときの処理
    $(window).scroll(function() {

        // トップメッセージエリア
        if ($(this).scrollTop() > top_concept_text_top - 500) $('.top-concept-text').addClass("entry-SlideUp");

        // cottageエリア
        if ($(this).scrollTop() > cottage_img_area_top - 500) $('.cottage-img-area').addClass("entry-LeftToRight");
        if ($(this).scrollTop() > cottage_sub_title_top - 500) $('.cottage-sub-title').addClass("entry-RightToLeft");
        if ($(this).scrollTop() > cottage_title_top - 500) $('.cottage-title').addClass("entry-RightToLeft");
        if ($(this).scrollTop() > cottage_text_top - 500) $('.cottage-text').addClass("entry-RightToLeft");

        // restingエリア
        if ($(this).scrollTop() > resting_img_area_sp_top - 500) $('.resting-img-area-sp').addClass("entry-RightToLeft");
        if ($(this).scrollTop() > resting_img_area_pc_top - 500) $('.resting-img-area-pc').addClass("entry-RightToLeft");
        if ($(this).scrollTop() > resting_sub_title_top - 500) $('.resting-sub-title').addClass("entry-LeftToRight");
        if ($(this).scrollTop() > resting_title_top - 500) $('.resting-title').addClass("entry-LeftToRight");
        if ($(this).scrollTop() > resting_text_top - 500) $('.resting-text').addClass("entry-LeftToRight");

        // saunaエリア
        if ($(this).scrollTop() > sauna_img_area_top - 500) $('.sauna-img-area').addClass("entry-LeftToRight");
        if ($(this).scrollTop() > sauna_sub_title_top - 500) $('.sauna-sub-title').addClass("entry-RightToLeft");
        if ($(this).scrollTop() > sauna_title_top - 500) $('.sauna-title').addClass("entry-RightToLeft");
        if ($(this).scrollTop() > sauna_text_top - 500) $('.sauna-text').addClass("entry-RightToLeft");

        // mapエリア
        if ($(this).scrollTop() > map_area_top - 500) $('.map-area').addClass("entry-SlideUp");

        // informationエリア
        if ($(this).scrollTop() > top_info_hdg - 500) $('.top-info-hdg').addClass("entry-SlideUp");
        if ($(this).scrollTop() > top_info_table - 500) $('.top-info-table').addClass("entry-SlideUp");

        // 予約ボタンエリア
        if ($(this).scrollTop() > reserve_title - 500) $('.reserve-title').addClass("entry-SlideUp");
        if ($(this).scrollTop() > reserve_title - 500) $('.reserve-text-area').addClass("entry-SlideUp");
        if ($(this).scrollTop() > reserve_title - 500) $('.reserve-btn-area').addClass("entry-SlideUp");

    });


});

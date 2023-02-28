@extends('layouts.app') @section('content')
<script type="text/javascript" src="{{ asset('/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/home.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('/slick/slick-theme.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/slick/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/loading.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/fadein_animation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/home.css') }}">
<div id="loading-wrapper">
    <div class="balls-guruguru">
        <span class="ball ball-1"></span>
        <span class="ball ball-2"></span>
        <span class="ball ball-3"></span>
        <span class="ball ball-4"></span>
        <span class="ball ball-5"></span>
        <span class="ball ball-6"></span>
        <span class="ball ball-7"></span>
        <span class="ball ball-8"></span>
    </div>
</div>
<div id="main-area">
    <section class="top-img-container">
        <div class="slider">
            <div class="slick-img">
                <!--<img class="sp-zone" src="{{ asset('/img/minpaku_1_sp.png') }}">-->
                <img class="pc-zone" src="{{ asset('/img/minpaku_1_pc.png') }}" alt="" />
            </div>
            <div class="slick-img">
                <!--<img class="sp-zone" src="{{ asset('/img/minpaku_2_sp.png') }}">-->
                <img class="pc-zone" src="{{ asset('/img/minpaku_2_pc.png') }}" alt="" />
            </div>
            <div class="slick-img">
                <!--<img class="sp-zone" src="{{ asset('/img/minpaku_3_sp.png') }}">-->
                <img class="pc-zone" src="{{ asset('/img/minpaku_3_pc.png') }}" alt="" />
            </div>
        </div>
        <div class="top-text-area">
            <p>雄大な自然と心休まる静けさ</p>
            <p>軽井沢で優雅なひとときを</p>
        </div>
    </section>

    <section class="top-message-container">
        <div class="top-concept__inner">
            <div class="top-concept-text" data-scroll-anim="true" style="padding-bottom: 20px;">
                <p class="top-concept-lead">
                    東京から車で約２時間。
                    <br> 軽井沢の一角「紫水京」別荘地。<br>
                    <br> 辺り一面に広がる木々の香りと景観は心を癒し、
                    <br>包み込む静寂は安息とくつろぎを与えます。
                </p>
                <br>
                <p class="top-concept-lead" data-scroll-anim-trigger="true">
                    ついに解放された大自然広がる貸別荘
                    <br>ぜひ一度体験してみて下さい。
                </p>
            </div>
        </div>
    </section>

    <section class="album-container">
        <div class="slider-album">
            <div class="slick-img">
                <img class="album-img" src="{{ asset('/img/album_1.png') }}" alt="" />
            </div>
            <div class="slick-img">
                <img class="album-img" src="{{ asset('/img/album_2.png') }}" alt="" />
            </div>
            <div class="slick-img">
                <img class="album-img" src="{{ asset('/img/album_3.png') }}" alt="" />
            </div>
            <div class="slick-img">
                <img class="album-img" src="{{ asset('/img/album_4.png') }}" alt="" />
            </div>
            <div class="slick-img">
                <img class="album-img" src="{{ asset('/img/album_5.png') }}" alt="" />
            </div>
            <div class="slick-img">
                <img class="album-img" src="{{ asset('/img/album_6.png') }}" alt="" />
            </div>
            <div class="slick-img">
                <img class="album-img" src="{{ asset('/img/album_7.png') }}" alt="" />
            </div>
            <div class="slick-img">
                <img class="album-img" src="{{ asset('/img/album_8.png') }}" alt="" />
            </div>
        </div>
    </section>
    <section class="cottage-container">
        <div class="cottage-img-area">
            <img class="pc-zone" src="{{ asset('/img/cotage_img.png') }}" alt="" />
        </div>
        <div class="cottage-text-area">
            <div class="cottage-sub-title">大自然に佇む</div>
            <div class="cottage-title">Cottage</div>
            <div class="cottage-text">
                <div class="pc-zone">
                    周りを木々に囲まれ自然と一体化した
                    <br>木造２階建てのコテージ。
                    <br>旅の疲れを存分に癒してくださいませ。
                </div>
                <div class="sp-zone">
                </div>
            </div>
        </div>
    </section>
    <section class="resting-container">
        <div class="resting-text-area">
            <div class="resting-sub-title">日常から離れる</div>
            <div class="resting-title">Resting</div>
            <div class="resting-text">
                <div class="pc-zone">
                    周りを木々に囲まれ自然と一体化した
                    <br>木造２階建てのコテージ。
                    <br>旅の疲れを存分に癒してくださいませ。
                </div>
                <div class="sp-zone">
                </div>
            </div>
        </div>
        <div class="resting-img-area">
            <img class="pc-zone" src="{{ asset('/img/resting_img.png') }}" alt="" />
        </div>
    </section>
    <section class="sauna-container">
        <div class="sauna-img-area">
            <img class="pc-zone" src="{{ asset('/img/sauna_img.png') }}" alt="" />
        </div>
        <div class="sauna-text-area">
            <div class="sauna-sub-title">大自然の中で体験する</div>
            <div class="sauna-title">Sauna</div>
            <div class="sauna-text">
                <div class="pc-zone">
                    他に誰もいないあなただけの空間で
                    <br>大自然の中心で経験するテントサウナ。
                    <br>自然の音を聞きながら、心も体も存分に
                    <br>癒してくださいませ。
                </div>
                <div class="sp-zone">
                </div>
            </div>
        </div>
    </section>
    <section class="map-container">
        <div class="map-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3215.229405575436!2d138.5668107508315!3d36.30674340292213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601dd2977cb44d61%3A0xe9e8082f2949d61f!2z44CSMzg5LTAxMTQg6ZW36YeO55yM5YyX5L2Q5LmF6YOh6Lu95LqV5rKi55S66IyC5rKi77yS77yR77yW4oiS77yR!5e0!3m2!1sja!2sjp!4v1677469275909!5m2!1sja!2sjp"
                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
    <section class="top-info" data-pos-y="information">
        <div class="top-info__inner">
            <h2 class="top-info-hdg">Information</h2>
            <table class="top-info-table">
                <tbody>
                    <tr>
                        <th>ADDRESS</th>
                        <td>
                            〒389-0114 長野県北佐久郡軽井沢町茂沢216-1
                        </td>
                    </tr>
                    <tr>
                        <th>運営</th>
                        <td>
                            紫水京理事会 理事長 大島尚
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section class="reserve-container">
        <div class="reserve-title">さあ、感動が待つ軽井沢へ。</div>
        <div class="reserve-area">
            <p class="reserve-text-area">
                <span class="u-wbr">ご予約は、下記の予約ページから承っております。</span>
            </p>
            <div class="reserve-btn-area">
                <a href="" target="_blank" class="reserve-btn-target" onclick="alert('現在準備中です。'); return false;">
                    <div class="reserve-btn-inner" data-btn-text-target="true" data-btn-text="RESERVATION">
                        <span class="reserve-btn-text">RESERVATION</span>
                    </div>
                </a>
            </div>
        </div>
    </section>
</div>
@endsection

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
            <p>心広がる、紫水京</p>
        </div>
</div>
</section>
</div>
@endsection

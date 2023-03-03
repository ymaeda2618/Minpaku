@extends('layouts.app') @section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/contact.css') }}">
<div id="main-area">
    <div class="thanks-title">{{ __('送信完了しました。') }}</div>
    <div class="btn-area">
        <a href="{{ route('home') }}" class="btn-a-area">
            <div class="top-inner-btn">
                <span class="top-btn-text">トップに戻る</span>
            </div>
        </a>
    </div>
</div> @endsection

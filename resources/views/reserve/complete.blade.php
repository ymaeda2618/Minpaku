@extends('layouts.app') @section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/reserve.css') }}">
<div id="main-area">
    @if($status['code'] == 400)
    <div class="reserve-sold-out">大変申し訳ございませんが、<br>指定の日時の予約が埋まってしまいました。</div>
    @else
    <div class="complete-title">{{ __('ご予約が完了しました。') }}</div>
    <div class="reservation-id-area">
        <div class="reservation-id-text">予約番号は下記になります。</div>
        <div class="reservation-id">{{ $status['reservation_ledger_id'] }}</div>
    </div>
    @endif
    <div class="btn-area">
        <a href="{{ route('home') }}" class="btn-a-area">
            <div class="top-inner-btn">
                <span class="top-btn-text">トップに戻る</span>
            </div>
        </a>
    </div>
</div> @endsection

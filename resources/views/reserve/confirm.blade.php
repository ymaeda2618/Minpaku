@extends('layouts.app')@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/reserve.css') }}">
<div id="main-area">
    <div class="reserve-title">予約内容</div>

    @if(empty($reservation_room))
    <div class="reserve-sold-out">大変申し訳ございませんが、<br>指定の日時の予約が埋まってしまいました。</div>
    @else
    <form method="POST" class="form-horizontal" action="{{ route('reserve.complete') }}">
        @csrf
        <input type="hidden" name="reservation_slot_id" value="{{ $reservation_room->reservation_slot_id }}">
        <div class="form-group">
            <label class="control-label">予約日時</label>
            <div class="input-display-area">{{ $reservation_room->thedate }}</div>
        </div>

        <div class="form-group">
            <label class="control-label">部屋名</label>
            <div class="input-display-area">{{ $reservation_room->name }}</div>
        </div>

        <div class="form-group">
            <label class="control-label">部屋広さ</label>
            <div class="input-display-area">{{ $reservation_room->room_size }}</div>
        </div>

        <div class="form-group">
            <label class="control-label">部屋最大人数</label>
            <div class="input-display-area">{{ $reservation_room->room_capacity }}</div>
        </div>

        <div class="form-group input-request-message">
            <label class="control-label">以下入力欄</label>
        </div>

        <div class="form-group">
            <label class="control-label">宿泊人数</label>
            <div class="input-display-area">{{ $inputs['num-guests'] }}人</div>
            <input type="hidden" name="num-guests" value="{{ $inputs['num-guests'] }}">
        </div>

        @if($reservation_room->option_1_flg)
        <div class="form-group">
            <label class="control-label">オプション1</label>
            <div class="checkbox">
                @if(isset($inputs['option-flg-1']))
                <div class="input-display-area">〇{{ $reservation_room->option_1 }}</div>
                <div><input type="hidden" name="option_1_flg" value="true"></div>
                @else
                <div class="input-display-area">×{{ $reservation_room->option_1 }}</div>
                <div><input type="hidden" name="option_1_flg" value="false"></div>
                @endif
            </div>
        </div>
        @endif @if($reservation_room->option_2_flg)
        <div class="form-group">
            <label class="control-label">オプション2</label>
            <div class="checkbox">
                @if(isset($inputs['option-flg-2']))
                <div class="input-display-area">〇{{ $reservation_room->option_1 }}</div>
                <div><input type="hidden" name="option_2_flg" value="true"></div>
                @else
                <div class="input-display-area">×{{ $reservation_room->option_1 }}</div>
                <div><input type="hidden" name="option_2_flg" value="false"></div>
                @endif
            </div>
        </div>
        @endif @if($reservation_room->option_3_flg)
        <div class="form-group">
            <label class="control-label">オプション3</label>
            <div class="checkbox">
                @if(isset($inputs['option-flg-3']))
                <div class="input-display-area">〇{{ $reservation_room->option_1 }}</div>
                <div><input type="hidden" name="option_3_flg" value="true"></div>
                @else
                <div class="input-display-area">×{{ $reservation_room->option_1 }}</div>
                <div><input type="hidden" name="option_3_flg" value="false"></div>
                @endif
            </div>
        </div>
        @endif
        <div class="form-group">
            <div class="btn-confirm-area">
                <div class="btn-inner-area">
                    <button type="submit" name="action" value="back">入力内容修正</button>
                    <button type="submit" name="action" value="submit">送信する</button>
                </div>
            </div>
        </div>
    </form>
    @endif

</div>
@endsection

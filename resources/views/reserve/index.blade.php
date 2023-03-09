@extends('layouts.app')@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/reserve.css') }}">
<div id="main-area">
    <div class="reserve-title">予約内容</div>

    @if(empty($reservation_room))
    <div class="reserve-sold-out">大変申し訳ございませんが、<br>指定の日時の予約が埋まってしまいました。</div>
    @else
    <form method="POST" class="form-horizontal" action="{{ route('reserve.confirm') }}">
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
            <label class="control-label" for="input-num-guests">宿泊人数 <span class="attention">※数値のみ</span></label>
            <input name="num-guests" id="input-num-guests" class="form-control" value="{{ old('num-guests') }}" type="tel"> @if ($errors->has('num-guests'))
            <p class="error-message">{{ $errors->first('num-guests') }}</p>
            @endif
        </div>

        @if($reservation_room->option_1_flg)
        <div class="form-group">
            <label class="control-label">オプション1</label>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="option-flg-1" value="option-flg-1"> <span>{{ $reservation_room->option_1 }}</span>
                </label>
            </div>
        </div>
        @endif @if($reservation_room->option_2_flg)
        <div class="form-group">
            <label class="control-label">オプション2</label>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="option-flg-2"> <span>{{ $reservation_room->option_2 }}</span>
                </label>
            </div>
        </div>
        @endif @if($reservation_room->option_3_flg)
        <div class="form-group">
            <label class="control-label">オプション3</label>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="option-flg-3"> <span>{{ $reservation_room->option_3 }}</span>
                </label>
            </div>
        </div>
        @endif
        <div class="form-group">
            <div class="btn-area">
                <button type="submit" name="action" value="submit">予約内容確認</button>
            </div>
        </div>
    </form>
    @endif

</div>
@endsection

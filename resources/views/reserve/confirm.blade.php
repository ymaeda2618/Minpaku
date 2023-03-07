@extends('layouts.app')@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/reserve.css') }}">
<div id="main-area">
    <div class="reserve-title">予約内容</div>

    @if(empty($reservation_room))
    <div class="reserve-sold-out">大変申し訳ございませんが、<br>指定の日時の予約が埋まってしまいました。</div>
    @else
    <form method="POST" class="form-horizontal" action="{{ route('calendar.confirm') }}">
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

        @if($reservation_room->option_1_flg)
        <div class="form-group">
            <label class="control-label">オプション1</label>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="option-flg-1"> <span>{{ $reservation_room->option_1 }}</span>
                </label>
            </div>
        </div>
        @endif
        <div><input type="hidden" name="option_1" value="{{ $reservation_room->option_1 }}"></div>

        @if($reservation_room->option_2_flg)
        <div class="form-group">
            <label class="control-label">オプション2</label>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="option-flg-2"> <span>{{ $reservation_room->option_2 }}</span>
                </label>
            </div>
        </div>
        @endif
        <div><input type="hidden" name="option_2" value="{{ $reservation_room->option_2 }}"></div>

        @if($reservation_room->option_3_flg)
        <div class="form-group">
            <label class="control-label">オプション3</label>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="option-flg-3"> <span>{{ $reservation_room->option_3 }}</span>
                </label>
            </div>
        </div>
        @endif
        <div><input type="hidden" name="option_3" value="{{ $reservation_room->option_3 }}"></div>

        <div class="form-group">
            <div class="btn-area">
                <button type="submit" name="action" value="submit">予約内容確認</button>
            </div>
        </div>
    </form>
    @endif

</div>
@endsection
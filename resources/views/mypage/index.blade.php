@extends('layouts.app')@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/mypage.css') }}">
<div id="main-area">
    <div class="mypage-title">マイページ</div>

    <section class="user-info-area">
        <div class="user-info-title">登録情報</div>
        <div class="user-info-table-area">
            <table class="user-info-table">
                <tbody>
                    <tr>
                        <th>名前</th>
                        <th>メールアドレス</th>
                        <th>TEL</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>{{ $user_info['name'] }}</td>
                        <td>{{ $user_info['email'] }}</td>
                        <td>{{ $user_info['tel'] }}</td>
                        <td><a href="{{route('user.index')}}">編集</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="reserve-history-area">
        <div class="reserve-history-title">予約履歴<span>※上位20件</span></div>

        <div class="reserve-history-table-area">
            <table class="reserve-history-table">
                <tbody>
                    <tr>
                        <th>予約番号</th>
                        <th>日付</th>
                        <th>予約場所</th>
                        <th>予約状態</th>
                        <th>詳細</th>
                    </tr>
                    @foreach($reservation_ledger as $reservation_ledger_val)
                    <tr>
                        <td>{{ $reservation_ledger_val->reservation_ledger_id }}</td>
                        <td>{{ $reservation_ledger_val->thedate }}</td>
                        <td>{{ $reservation_ledger_val->name }}</td>
                        <td>{{ $reservation_ledger_val->status_name }}</td>
                        <td><a href="" onclick="alert('現在準備中です。'); return false;">詳細</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection
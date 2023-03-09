<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReservationSlot;
use Carbon\Carbon;

class CalendarController extends Controller
{
    // 予約カレンダーページを表示
    public function index()
    {
        return view('calendar.index');
    }


    // 予約可能箇所を表示
    public function getReserveSlots()
    {
        // 予約は明日以降のデータを取得する
        $today = Carbon::now();

        // DBから予約可能なデータ抽出
        $reservation_room =  ReservationSlot::where([
           ['thedate', '>', $today],
           ['reserve_flg', '=', false]
        ])->get();

        // 予約情報の初期化
        $response = [];

        // 予約情報を作成
        foreach($reservation_room as $reservation_room_val){
            $response[] = [
                'title' => '予約可',
                'start' => $reservation_room_val->thedate,
                'end'   => $reservation_room_val->thedate,
                'url'   => './reserve/'.$reservation_room_val->id
            ];
        }

        return $response;
    }
}

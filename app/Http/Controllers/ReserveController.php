<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReservationRoom;
use App\Models\ReservationSlot;
use Illuminate\Support\Facades\DB;

class ReserveController extends Controller
{
    // 予約カレンダーページを表示
    public function index()
    {
        return view('calendar.index');
    }

    // 予約ページ
    public function reserve(Request $request, $reserve_slot_id)
    {
        $reservation_room = array();

        // セッション中の全データを取得する
        $data = $request->session()->all();

        // 対象の予約を取得し、予約可能かチェック
        $reservation_room =  DB::table('reservation_slots AS ReservationSlot')
        ->select(
            "ReservationSlot.id            AS reservation_slot_id",
            "ReservationSlot.thedate       AS thedate",
            "ReservationRoom.name          AS name",
            "ReservationRoom.room_size     AS room_size",
            "ReservationRoom.room_capacity AS room_capacity",
            "ReservationRoom.option_1_flg  AS option_1_flg",
            "ReservationRoom.option_1      AS option_1",
            "ReservationRoom.option_2_flg  AS option_2_flg",
            "ReservationRoom.option_2      AS option_2",
            "ReservationRoom.option_3_flg  AS option_3_flg",
            "ReservationRoom.option_3      AS option_3"
        )
        ->join("reservation_rooms AS ReservationRoom", function ($join) {
            $join->on('ReservationRoom.id', '=', 'ReservationSlot.reservation_room_id');
        })->where([
           ['ReservationSlot.id', '=', $reserve_slot_id],
           ['ReservationSlot.reserve_flg', '=', false],
        ])->first();

        return view('calendar.reserve')->with([
            "reservation_room"  => $reservation_room
        ]);
    }

    // 予約確認確認ページ
    public function confirm(Request $request)
    {
        // フォームからの入力値を全て取得
        $inputs = $request->all();



        return view('contact.confirm', [
            'inputs' => $inputs,
        ]);
    }

    // 予約可能箇所を表示
    public function getReserveSlots()
    {
        // DBから予約可能な
        return [
            [
                'title' => '予約可',
                'start' => '2023-03-10',
                'end'   => '2023-03-10',
                'url'   => 'http://127.0.0.1:8000/reserve/1'
            ],
            [
                'title' => '予約可',
                'start' => '2023-03-13',
                'end'   => '2023-03-13',
                'url'   => 'http://127.0.0.1:8000/reserve/2'
            ],
        ];
    }
}

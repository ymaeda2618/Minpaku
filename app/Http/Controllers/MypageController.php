<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MypageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // myページ
    public function index()
    {

        // ユーザー情報の取得
        $user_info    = \Auth::user();
        $user_id = $user_info['id'];

        // 予約は明日以降のデータを取得する
        $today = Carbon::now()->format('Y/m/d');

        // 対象の予約を取得し、予約可能かチェック
        $reservation_ledger =  DB::table('reservation_ledgers AS ReservationLedger')
        ->select(
            "ReservationLedger.id          AS reservation_ledger_id",
            "ReservationSlot.thedate       AS thedate",
            "ReservationRoom.name          AS name"
        )->selectRaw("CASE WHEN ReservationLedger.status = 0 THEN '未承認'
                           WHEN ReservationLedger.status = 1 THEN '承認済・未決済'
                           WHEN ReservationLedger.status = 2 THEN '承認済・決済済'
                           WHEN ReservationLedger.status = 3 THEN '承認済'
                           WHEN ReservationLedger.status = 5 THEN '宿泊済'
                           WHEN ReservationLedger.status = 10 THEN 'キャンセル済'
                       END AS status_name")
        ->join("reservation_slots AS ReservationSlot", function ($join) {
            $join->on('ReservationSlot.id', '=', 'ReservationLedger.reservation_slot_id');
        })
        ->join("reservation_rooms AS ReservationRoom", function ($join) {
            $join->on('ReservationRoom.id', '=', 'ReservationSlot.reservation_room_id');
        })->where([
           ['ReservationLedger.user_id', '=', $user_id],
           ['ReservationSlot.thedate', '>=', $today],
        ])
        ->orderBy("ReservationSlot.thedate", "desc")
        ->get(20);

        return view('mypage.index')->with([
            "user_info"  => $user_info,
            "reservation_ledger" => $reservation_ledger
        ]);
    }

}

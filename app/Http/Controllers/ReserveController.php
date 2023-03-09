<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReservationLedger;
use App\Models\ReservationSlot;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ReserveRequest;
use Carbon\Carbon;
use Exception;
class ReserveController extends Controller
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


    // 予約ページ
    public function index(Request $request, $reserve_slot_id)
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

        return view('reserve.index')->with([
            "reservation_room"  => $reservation_room
        ]);
    }

    // 予約確認確認ページ
    public function confirm(ReserveRequest $request)
    {
        // フォームからの入力値を全て取得
        $inputs = $request->all();

        // reserve_slot_idを取得
        $reserve_slot_id = $inputs['reservation_slot_id'];

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

        return view('reserve.confirm', [
            'inputs' => $inputs,
            'reservation_room' => $reservation_room
        ]);
    }

    // 予約完了ページ
    public function complete(Request $request)
    {
        // レスポンスステータスの初期化
        $status = [
            "code" => 200,
            "reservation_ledger_id" => 0,
            "error_message" => ""
        ];

        try {

            DB::beginTransaction();

            // フォームからの入力値を全て取得
            $inputs = $request->all();

            // hiddneの内容を酒億
            $reserve_slot_id = $inputs['reservation_slot_id'];
            $num_guests      = $inputs['num-guests'];
            $option_1_flg    = isset($inputs['option_1_flg']) ? 1 : 0;
            $option_2_flg    = isset($inputs['option_2_flg']) ? 1 : 0;
            $option_3_flg    = isset($inputs['option_3_flg']) ? 1 : 0;

            // ユーザー情報の取得
            $user_info    = \Auth::user();
            $user_id = $user_info['id'];

            // ReservationSlotの対象予約をtrueにする
            ReservationSlot::where('id', '=', $reserve_slot_id)->update([
                'reserve_flg' => 1
            ]);

            // 予約テーブルに追加する
            $reservation_ledger = new ReservationLedger;
            $reservation_ledger->reservation_slot_id = $reserve_slot_id;
            $reservation_ledger->user_id             = $user_id;
            $reservation_ledger->num_guest           = $num_guests;
            $reservation_ledger->status              = 0;
            $reservation_ledger->option_1_flg        = $option_1_flg;
            $reservation_ledger->option_2_flg        = $option_2_flg;
            $reservation_ledger->option_3_flg        = $option_3_flg;
            $reservation_ledger->created_at          = Carbon::now();
            $reservation_ledger->updated_at          = Carbon::now();
            $reservation_ledger->save();

            // 取得したIDを予約番号として取得
            $status["reservation_ledger_id"] = $reservation_ledger->id;

            DB::commit();

        } catch (Exception $e) {

            // エラー処理
            $status = [
                "code" => 400,
                "error_message" => "予約処理に失敗しました。"
            ];

            DB::rollBack();

        }

        return view('reserve.complete', [
            'status' => $status
        ]);
    }
}

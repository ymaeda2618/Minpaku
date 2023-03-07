<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

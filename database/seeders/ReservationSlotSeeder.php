<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ReservationSlot;

class ReservationSlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReservationSlot::create([
            "id"                  => "1",
            "thedate"             => "2023/03/10",
            "reservation_room_id" => "1",
            "reserve_flg"         => "0",
            "created_at"          => "2023/03/05",
            "updated_at"          => "2023/03/05"
        ]);
    }
}

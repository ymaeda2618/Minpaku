<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ReservationRoom;

class ReservationRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReservationRoom::create([
            "id"            => "1",
            "name"          => "紫水荘",
            "room_size"     => "40㎡",
            "room_capacity" => "10",
            "option_1_flg"  => "1",
            "option_1"      => "テントサウナ",
            "option_2_flg"  => "0",
            "option_2"      => "",
            "option_3_flg"  => "0",
            "option_3"      => "",
            "created_at"    => "2023/03/05",
            "updated_at"    => "2023/03/05"
        ]);
    }
}

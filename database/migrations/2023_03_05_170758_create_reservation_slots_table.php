<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationSlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_slots', function (Blueprint $table) {
            $table->increments('id');
            $table->date('thedate')->comment('予約日');
            $table->bigInteger('reservation_room_id')->default(0)->comment('予約部屋テーブルID');
            $table->integer('reserve_flg')->default(0)->comment('予約フラグ');
            $table->timestamp('created_at')->comment('作成日時');
            $table->timestamp('updated_at')->comment('更新日時')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_slots');
    }
}

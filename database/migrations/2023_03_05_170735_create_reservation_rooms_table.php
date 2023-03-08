<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable()->comment('部屋名称');
            $table->string('room_size')->nullable()->comment('部屋広さ');
            $table->string('room_capacity')->nullable()->comment('部屋人数');
            $table->integer('option_1_flg')->default(0)->comment('オプション1フラグ');
            $table->string('option_1')->nullable()->comment('オプション1');
            $table->integer('option_2_flg')->default(0)->comment('オプション2フラグ');
            $table->string('option_2')->nullable()->comment('オプション2');
            $table->integer('option_3_flg')->default(0)->comment('オプション3フラグ');
            $table->string('option_3')->nullable()->comment('オプション3');
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
        Schema::dropIfExists('reservation_rooms');
    }
}

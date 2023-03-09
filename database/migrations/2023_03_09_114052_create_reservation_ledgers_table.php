<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationLedgersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_ledgers', function (Blueprint $table) {

            $table->increments('id');
            $table->bigInteger('reservation_slot_id')->default(0)->comment('予約枠テーブルID');
            $table->bigInteger('user_id')->default(0)->comment('予約ユーザーID');
            $table->integer('num_guest')->default(0)->comment('宿泊人数');
            $table->integer('status')->default(0)->comment('予約ステータス');
            $table->integer('option_1_flg')->default(0)->comment('オプション1利用フラグ');
            $table->integer('option_2_flg')->default(0)->comment('オプション2利用フラグ');
            $table->integer('option_3_flg')->default(0)->comment('オプション3利用フラグ');
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
        Schema::dropIfExists('reservation_ledgers');
    }
}

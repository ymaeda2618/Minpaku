<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationSlot extends Model
{
    use HasFactory;

    /**
    * モデルと関連しているテーブル
    *
    * @var string
    */
   protected $table = 'reservation_slots';
}

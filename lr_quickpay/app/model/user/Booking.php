<?php

namespace App\model\user;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table ="tbl_booking";
    protected $primaryKey="booking_id";
    public $timestamps= False;
    protected  $guarded=[];
}

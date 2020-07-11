<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Promocode extends Model
{
    protected $table ="tbl_promocode";
    protected $primaryKey="promocode_id";
    public $timestamps= False;
    protected  $guarded=[];
}

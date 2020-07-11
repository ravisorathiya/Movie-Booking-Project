<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Caste extends Model
{
     protected $table ="tbl_caste";
    protected $primaryKey="cast_id";
    public $timestamps= False;
    protected  $guarded=[];
}

<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Cast_type extends Model
{
    protected $table ="tbl_cast_type";
    protected $primaryKey="cast_type_id";
    public $timestamps= False;
    protected  $guarded=[];
}

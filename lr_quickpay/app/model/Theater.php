<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Theater extends Model
{
     protected $table ="tbl_theater";
    protected $primaryKey="theater_id";
    public $timestamps= False;
    protected  $guarded=[];
}

<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class screen extends Model
{
    protected $table ="tbl_screen";
    protected $primaryKey="screen_id";
    public $timestamps= False;
    protected  $guarded=[];
}

<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table ="tbl_banner";
    protected $primaryKey="banner_id";
    public $timestamps= False;
    protected  $guarded=[];
}

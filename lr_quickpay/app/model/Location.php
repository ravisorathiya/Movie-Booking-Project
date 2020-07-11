<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table ="tbl_location";
    protected $primaryKey="location_id";
    public $timestamps= False;
    protected  $guarded=[];
}

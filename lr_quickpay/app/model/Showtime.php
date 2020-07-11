<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
     protected $table ="tbl_movie_time";
    protected $primaryKey="time_id";
    public $timestamps= False;
    protected  $guarded=[];
}

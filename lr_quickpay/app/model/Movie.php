<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table ="tbl_movie";
    protected $primaryKey="movie_id";
    public $timestamps= False;
    protected  $guarded=[];
}

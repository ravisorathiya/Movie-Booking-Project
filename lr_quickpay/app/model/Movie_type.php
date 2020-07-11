<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Movie_type extends Model
{
    protected $table ="tbl_movie_type";
    protected $primaryKey="type_id";
    public $timestamps= False;
    protected  $guarded=[];
}

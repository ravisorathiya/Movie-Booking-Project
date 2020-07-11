<?php

namespace App\model\user;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
      protected $table ="tbl_registration";
    protected $primaryKey="register_id";
    public $timestamps= False;
    protected  $guarded=[];
}

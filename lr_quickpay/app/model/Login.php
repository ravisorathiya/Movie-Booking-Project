<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
     protected $table ="tbl_admin_login";
    protected $primaryKey="admin_id";
    public $timestamps= False;
    protected  $guarded=[];
}

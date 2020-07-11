<?php

namespace App\model\user;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
     protected $table ="tbl_contactus";
    protected $primaryKey="contact_id";
    public $timestamps= False;
    protected  $guarded=[];
}

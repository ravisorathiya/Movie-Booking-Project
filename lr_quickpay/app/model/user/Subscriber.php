<?php

namespace App\model\user;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $table ="tbl_email_subscriber";
    protected $primaryKey="subscriber_id";
    public $timestamps= False;
    protected  $guarded=[];
}

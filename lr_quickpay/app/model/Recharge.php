<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Recharge extends Model
{
    protected $table ="tbl_recharge_transaction";
    protected $primaryKey="transaction_id";
    public $timestamps= False;
    protected  $guarded=[];
}

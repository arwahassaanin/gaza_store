<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded=[];
    function user(){
        return $this->belongsTo(User::class)->withDefault();
    }
    function order(){
        return $this->belongsTo(Order::class)->withDefault();
    }
    //
}

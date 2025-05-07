<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded=[];
    function user(){
        return $this->belongsTo(User::class)->withDefault();
    }
    function order_detail(){
        $this->HasMany(OrderDetail::class)->withDefault();
    }
    function payment(){
        $this->hasOne(Payment::class)->withDefault();
    }
    //
}

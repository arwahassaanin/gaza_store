<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded=[];
    function user(){
        $this->belongsTo(User::class)->withDefault();
    }
    function product(){
        $this->belongsTo(Product::class)->withDefault();
    }
    //
}

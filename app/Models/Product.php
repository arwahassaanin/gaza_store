<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=[];
    function Category(){
        // withDefault() لو م لقيت هات اوبجكت فاضي
        return $this->belongsTo(Category::class)->withDefault();

    }
    function image(){
        return $this->morphOne(Image::class,'imageable')->where('type','main');
    }
    function gallary(){
        return $this->morphMany(Image::class,'imageable')->where('type','gallery');
    }
    function review(){
        $this->HasMany(Review::class)->withDefault();
    }
    function cart(){
        $this->HasMany(Cart::class)->withDefault();
    }
    function order_detail(){
        $this->HasMany(OrderDetail::class)->withDefault();
    }
    //
}

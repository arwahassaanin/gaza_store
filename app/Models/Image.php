<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded=[];
     function imageable(){
        return $this-> morphTo();
     }
    //
}

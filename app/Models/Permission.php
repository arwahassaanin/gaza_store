<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $guarded=[];
    function Role(){
        return $this->belongsToMany(Role::class);
    }
    //
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    //relacion 1-m 
    public function cars()
    {
        return $this->hasMany('App\Models\Car');
    }
}

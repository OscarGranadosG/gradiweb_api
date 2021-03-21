<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    //relacion 1-m
    public function owner()
    {
        return $this->belongsTo('App\Models\Owner');
    }

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }
}

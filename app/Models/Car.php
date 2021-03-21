<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'cars';

    protected $fillable = [
        'license_plate',
        'type',
        'color',
        'owner_id',
        'brand_id'
    ];

    //relacion 1-m
    public function owner()
    {
        return $this->belongsTo('App\Models\Owner');
    }

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }

    //funciones crud
    public static function saveDataCar($data)
    {
        return Car::create($data);
    }
}

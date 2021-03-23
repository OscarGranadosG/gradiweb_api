<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public static function getCarsByBrand()
    {
        return Car::select('brands.id', DB::raw('count(cars.brand_id) AS quantity'), 'brands.name')
            ->join('brands','brands.id','=','cars.brand_id')
            ->orderBy(DB::raw('count(cars.brand_id)'),'DESC')
            ->groupBy('brands.id');
    }

    public static function getAllData()
    {
        return Car::select(
                'cars.id', 'license_plate', 'type', 'color', 'brands.name as brandName',
                'owners.name as ownerName', 'owners.identification_card', 'owners.email', 'owners.phone'
            )
            ->join('brands','brands.id','=','cars.brand_id')
            ->join('owners','owners.id','=','cars.owner_id')
            ->groupBy('cars.id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'brands';

    protected $fillable = [
        'name'
    ];

    //relacion 1-m
    public function cars()
    {
        return $this->hasMany('App\Models\Car');
    }

    public static function saveDataBrand($data)
    {
        return Brand::create($data);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'owners';

    protected $fillable = [
        'name',
        'identification_card',
        'email',
        'phone'
    ];

    //relacion 1-m 
    public function cars()
    {
        return $this->hasMany('App\Models\Car');
    }

    public static function saveDataOwner($data)
    {    
        return Owner::create($data);
    }

    public static function getDataOwner()
    {
        return Owner::select('id', 'name', 'identification_card', 'email', 'phone');   
    }



    
}

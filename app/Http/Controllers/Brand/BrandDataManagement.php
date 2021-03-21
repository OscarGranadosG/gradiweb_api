<?php

namespace App\Http\Controllers\Brand;

use App\Models\Brand;

class BrandDataManagement
{
    private $data;

    //funcion para setear la data proveniente del controlador
    public function setData($data)
    {
        $this->data = $data;
    }

    public function saveBrand()
    {
        $data = [
            'name' => $this->data['name']
        ];

        return Brand::saveDataBrand($data);
    }

    
}
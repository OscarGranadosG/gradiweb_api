<?php

namespace App\Http\Controllers\Car;

use App\Models\Car;

class CarDataManagement
{
    private $data;

    //funcion para setear la data proveniente del controlador
    public function setData($data)
    {
        $this->data = $data;
    }

    public function saveCar()
    {
        $data = [
            'license_plate' => $this->data['license_plate'],
            'type' => $this->data['type'],
            'color' => $this->data['color'],
            'owner_id' => $this->data['owner_id'],
            'brand_id' => $this->data['brand_id']
        ];

        return Car::saveDataCar($data);
    }
}
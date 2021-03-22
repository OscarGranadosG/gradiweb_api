<?php

namespace App\Http\Controllers\Owner;

use App\Models\Owner;

class OwnerDataManagement
{
    private $data;

    //funcion para setear la data proveniente del controlador
    public function setData($data)
    {
        $this->data = $data;
    }

    public function saveOwner()
    {
        $data = [
            'name' => $this->data['name'],
            'identification_card' => $this->data['identification_card'],
            'email' => $this->data['email'],
            'phone' => $this->data['phone']
        ];

        return Owner::saveDataOwner($data);
    }

    public function getDataOwners()
    {
        return Owner::getDataOwner()->get()->toArray();
    }
}
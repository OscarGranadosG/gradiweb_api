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
            'email' => $this->data['email'],
            'phone' => $this->data['phone']
        ];

        return Owner::saveDataOwner($data);
    }
}
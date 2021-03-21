<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Car\CarDataManagement;
use Symfony\Component\HttpFoundation\JsonResponse;

class CarController extends Controller
{
    private $management;

    public function __construct() {
        $this->management = new CarDataManagement();
    }

    public function saveCar(Request $request)
    {
        $data = $request->all();
        $this->management->setData($data);

        try {
            return response()
                ->json(['msg' => 'Carro guardado correctamente',
                    'results' => $this->management->saveCar()])
                ->setStatusCode(JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return response()
                ->json(['error' => $e->getMessage()])
                ->setStatusCode(JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}

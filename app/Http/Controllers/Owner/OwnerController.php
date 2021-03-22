<?php

namespace App\Http\Controllers\Owner;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Owner\OwnerDataManagement;
use Symfony\Component\HttpFoundation\JsonResponse;

class OwnerController extends Controller
{

    private $management;

    public function __construct() {
        $this->management = new OwnerDataManagement();
    }

    public function saveOwner(Request $request)
    {
        $data = $request->all();
        $this->management->setData($data);

        try {
            return response()
                ->json(['msg' => 'Propietario guardado con exito',
                    'results' => $this->management->saveOwner()])
                ->setStatusCode(JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return response()
                ->json(['error' => $e->getMessage()])
                ->setStatusCode(JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getOwners()
    {
        try {
            return response()
                ->json(['status' => 'Success',
                    'results' => $this->management->getDataOwners()])
                ->setStatusCode(JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return response()
                ->json(['error' => $e->getMessage()])
                ->setStatusCode(JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}

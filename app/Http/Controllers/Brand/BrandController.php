<?php

namespace App\Http\Controllers\Brand;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Brand\BrandDataManagement;
use Symfony\Component\HttpFoundation\JsonResponse;

class BrandController extends Controller
{
    private $management;

    public function __construct() {
        $this->management = new BrandDataManagement();
    }

    public function saveBrand(Request $request)
    {
        $data = $request->all();
        $this->management->setData($data);

        try {
            return response()
                ->json(['msg' => 'Marca guardada con exito',
                    'results' => $this->management->saveBrand()])
                ->setStatusCode(JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return response()
                ->json(['error' => $e->getMessage()])
                ->setStatusCode(JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getBrands()
    {
        try {
            return response()
                ->json(['status' => 'Success',
                    'results' => $this->management->getDataBrands()])
                ->setStatusCode(JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return response()
                ->json(['error' => $e->getMessage()])
                ->setStatusCode(JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}

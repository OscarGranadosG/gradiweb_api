<?php

use App\Http\Controllers\Brand\BrandController;
use App\Http\Controllers\Car\CarController;
use App\Http\Controllers\Owner\OwnerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('owner', [OwnerController::class, 'saveOwner']);
Route::get('getOwners', [OwnerController::class, 'getOwners']);

Route::post('brand', [BrandController::class, 'saveBrand']);
Route::get('getBrands', [BrandController::class, 'getBrands']);

Route::post('car', [CarController::class, 'saveCar']);

//cantidad de vehiculos por marca
Route::get('carsByBrand', [CarController::class, 'getCarByBrands']);

Route::get('allData', [CarController::class, 'getAllData']);


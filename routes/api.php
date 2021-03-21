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

Route::post('brand', [BrandController::class, 'saveBrand']);

Route::post('car', [CarController::class, 'saveCar']);


<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CropController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\BasinController;
use App\Http\Controllers\WorldCropController;
use App\Http\Controllers\CountryCropController;
use App\Http\Controllers\BasincropController;
use App\Http\Controllers\WaterController;



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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/first-api',[CropController::class,'show']);

Route::get('/second-api',[CountryController::class,'show']);

Route::get('/third-api',[BasinController::class,'show']);

Route::get('/fourth-api',[WorldCropController::class,'show']);

Route::get('/fifth-api',[CountryCropController::class,'show']);

Route::get('/sixth-api',[BasincropController::class,'show']);


Route::get('/gallery',[WaterController::class,'gal']);

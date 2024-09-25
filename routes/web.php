<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\WaterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[DemoController::class,'demo1']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/index',[LoginController::class,'index']);
// Route::get('/next',[LoginController::class,'nextpage']);
Route::get('/waterfootprint',[WaterController::class,'water']);
Route::get('/waterAssessment',[WaterController::class,'Assessment']);

Route::get('/gallery',[WaterController::class,'gal']);

Route::get('/frequently',[WaterController::class,'freq']);

Route::get('/lexicon',[WaterController::class,'lexi']);

Route::get('/contact',[WaterController::class,'cont']);

Route::get('/time',[WaterController::class,'time']);

Route::get('/extended',[WaterController::class,'extend']);

Route::get('/assess',[WaterController::class,'ass']);

Route::get('/company',[WaterController::class,'company']);

require __DIR__.'/auth.php';

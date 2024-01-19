<?php

use App\Http\Controllers\BodegaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [BodegaController::class, "index"])->name("bodegas.show");

Route::post('/deleteBodega/{bodega}', [BodegaController::class, "destroy"])->name("bodega.delete");
<?php

use App\Http\Controllers\BodegaController;
use App\Http\Controllers\VinoController;
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

Route::get('/', [BodegaController::class, "index"])->name("bodegas.index");

Route::get('/bodega/{bodega}', [BodegaController::class, "show"])->name("bodega.show");

Route::get('/store', [BodegaController::class, "showStore"])->name("bodega.store");

Route::post('/store', [BodegaController::class, "store"])->name("bodega.store");

Route::post('/update/{bodega}', [BodegaController::class, "update"])->name("bodega.update");

Route::post('/deleteBodega/{bodega}', [BodegaController::class, "destroy"])->name("bodega.delete");


Route::get('/storeVino/{idBodega}', [VinoController::class, "showStore"])->name("vino.store");

Route::post('/storeVino/{idBodega}', [VinoController::class, "store"])->name("vino.store");

Route::get('/showVino/{vino}/{idBodega}', [VinoController::class, "show"])->name("vino.show");

Route::post('/deleteVino/{vino}/{idBodega}', [VinoController::class, "destroy"])->name("vino.delete");

Route::post('/updateVino/{vino}/{idBodega}', [VinoController::class, "update"])->name("vino.update");

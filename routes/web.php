<?php

use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\PlatilloController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ComandaController;

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    //CUCEI
    return view('index');
});

Route::resource('comanda', ComandaController::class);
 
Route::resource('mesa', MesaController::class);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

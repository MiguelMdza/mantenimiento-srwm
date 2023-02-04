<?php

use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\PlatilloController;
use App\Http\Controllers\ProveedorController;
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

Route::get('/', [MainController::class, 'index'])->name('mainIndex');
Route::get('/ticket/{id_mesa}/{id_orden}', [MainController::class, 'printTicket'])->name('printTicket');

Route::get('/mesas', [MesaController::class, 'index'])->name('mesaIndex');
Route::get('/mesas/view/{id}', [MesaController::class, 'findById'])->name('mesaView');
Route::get('/mesas/create', [MesaController::class, 'create'])->name('mesaCreate');
Route::post('mesas/store', [MesaController::class, 'store'])->name('mesaStore');
Route::get('/mesas/edit/{id}', [MesaController::class, 'edit'])->name('mesaEdit');
Route::post('mesas/update',[MesaController::class, 'update'])->name('mesaUpdate');
Route::get('/mesas/{id_mesa}/orden', [MesaController::class, 'viewOrdenByMesa'])->name('viewOrdenAbierta');
Route::post('/mesas/delete', [MesaController::class, 'delete'])->name('mesaDelete');

Route::get('/platillos', [PlatilloController::class, 'index'])->name('platilloIndex');
Route::get('platillos/view/{id}', [PlatilloController::class, 'view'])->name('platilloView');
Route::get('/platillos/create', [PlatilloController::class, 'create'])->name('platilloCreate');
Route::post('/platillos/store', [PlatilloController::class, 'store'])->name('platilloStore');
Route::get('/platillos/edit/{id}', [PlatilloController::class, 'edit'])->name('platilloEdit');
Route::post('/platillos/update/{id}', [PlatilloController::class, 'update'])->name('platilloUpdate');
Route::get('/platillos/delete/{id}', [PlatilloController::class, 'delete'])->name('platilloDelete');

Route::get('/ingredientes', [IngredienteController::class, 'index'])->name('ingredienteIndex');
Route::get('/ingredientes/view/{id}', [IngredienteController::class, 'view'])->name('ingredienteView');
Route::get('/ingredientes/create', [IngredienteController::class, 'create'])->name('ingredienteCreate');
Route::post('/ingredientes/store', [IngredienteController::class, 'store'])->name('ingredienteStore');
Route::get('/ingredientes/edit/{id}', [IngredienteController::class, 'edit'])->name('ingredienteEdit');
Route::post('/ingredientes/update', [IngredienteController::class, 'update'])->name('ingredienteUpdate');
Route::get('/ingredientes/delete/{id}', [IngredienteController::class, 'delete'])->name('ingredienteDelete');

Route::get('/proveedores', [ProveedorController::class, 'index'])->name('proveedorIndex');
Route::get('/proveedores/view/{id}', [ProveedorController::class, 'view'])->name('proveedorView');
Route::get('/proveedores/create', [ProveedorController::class, 'create'])->name('proveedorCreate');
Route::post('/proveedores/store', [ProveedorController::class, 'store'])->name('proveedorStore');
Route::get('/proveedores/edit/{id}', [ProveedorController::class, 'edit'])->name('proveedorEdit');
Route::post('/proveedores/update/{id}', [ProveedorController::class, 'update'])->name('proveedorUpdate');
Route::get('/proveedores/delete/{id}', [ProveedorController::class, 'delete'])->name('proveedorDelete');
Route::get('/proveedores/{id}/viewMail', [ProveedorController::class, 'viewMail'])->name('proveedorMailView');
Route::get('/proveedores/{id}/sendMail', [ProveedorController::class, 'sendMail'])->name('proveedorMail');

Route::get('/ordenes', [OrdenController::class, 'index'])->name('ordenIndex');
Route::get('/ordenes/mesa/{id_mesa}/orden/{id_orden}/view', [OrdenController::class, 'verDetalle'])->name('ordenDetalle');
Route::get('/ordenes/mesa/{id_mesa}/orden/{id_orden}', [OrdenController::class, 'cerrarOrden'])->name('cerrarOrden');
Route::get('/ordenes/store/{id_mesa}', [OrdenController::class, 'store'])->name('ordenStore');
Route::post('/ordenes/addPlatillo', [OrdenController::class, 'addPlatilloOrden'])->name('ordenAddPlatillo');


Route::get('/test', [OrdenController::class, 'test'])->name('test');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

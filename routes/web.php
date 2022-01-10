<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Acerca;
use App\Http\Controllers\VideoJuego;
use App\Http\Controllers\AccesoriosController;
use App\Http\Controllers\ProveedorController;

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

Route::get('/acerca',[Acerca::class ,'index'])->name('acerca') ;
Route::get('/videojuego',[VideoJuego::class ,'index'])->name('videojuego') ;
Route::get('/proveedor',[ProveedorController::class ,'index'])->name('proveedor') ;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
// Rutas CRUD

/* Crear */
Route::middleware(['auth:sanctum', 'verified'])->get('admin/accesorios/crear', [AccesoriosController::class, 'crear' ] )->name('admin/accesorios/crear');
Route::middleware(['auth:sanctum', 'verified'])->put('admin/accesorios/store', [AccesoriosController::class, 'store' ] )->name('admin/accesorios/store');


/* Leer */
Route::middleware(['auth:sanctum', 'verified'])->get('admin/accesorios', [AccesoriosController::class, 'index' ] )->name('admin/accesorios');

/* Actualizar */
Route::middleware(['auth:sanctum', 'verified'])->get('admin/accesorios/actualizar/{id}', [AccesoriosController::class, 'actualizar'])->name('admin/accesorios/actualizar');
Route::middleware(['auth:sanctum', 'verified'])->put('admin/accesorios/update/{id}', [AccesoriosController::class, 'update'])->name('admin/accesorios/update');

/* Eliminar */
Route::middleware(['auth:sanctum', 'verified'])->put('admin/accesorios/eliminar/{id}',[AccesoriosController::class,'eliminar'])->name('admin/accesorios/eliminar');

/* Eliminar imagen de un registro */
Route::middleware(['auth:sanctum', 'verified'])->get('admin/accesorios/eliminarimagen/{id}{bid}',[AccesoriosController::class,'eliminarimagen'])->name('admin/accesorios/eliminarimagen');

/* Vista para los detalles de un registro */
Route::middleware(['auth:sanctum', 'verified'])->get('admin/accesorios/detallesproducto/{id}', [AccesoriosController::class ,'detallesproducto']);

Route::get('admin/accesorios/{i}/pay', [AccesoriosController::class ,'pay'])->middleware('auth')->name('accesorio.pay');

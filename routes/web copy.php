<?php
use App\Http\Controllers\CotizacionesController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProyectosController;
use App\Http\Controllers\VentanasController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Route;






// Rutas para cotizaciones
Route::resource('cotizaciones', CotizacionesController::class);

// Rutas para clientes
Route::resource('clientes', ClientesController::class);

// Rutas para proyectos
Route::resource('proyectos', ProyectosController::class);

// Rutas para ventanas
Route::resource('ventanas', VentanasController::class);

// Ruta para exportar cotizaciones/proyectos a PDF
Route::get('exportar-pdf', [ExportController::class, 'exportarPDF']);

// Rutas de autenticación
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

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
    return view('welcome');
});

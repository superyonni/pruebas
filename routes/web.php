<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CotizacionesController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProyectosController;
use App\Http\Controllers\VentanasController;
use App\Http\Controllers\ExportController;

// Rutas para la autenticación
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rutas para el registro y restablecimiento de contraseña
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);
Route::get('/password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'reset'])->name('password.update');

// Rutas para las cotizaciones
Route::resource('cotizaciones', CotizacionesController::class);

// Rutas para los clientes
Route::resource('clientes', ClientesController::class);

// Rutas para los proyectos
Route::resource('proyectos', ProyectosController::class);

// Rutas para las ventanas
Route::resource('ventanas', VentanasController::class);

// Ruta para exportar a PDF
Route::get('/exportar-pdf', [ExportController::class, 'exportarPDF'])->name('exportar.pdf');

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    // Coloca aquí las rutas que requieren autenticación
});

// Ruta de inicio
Route::get('/', function () {
    return view('welcome');
})->name('home');

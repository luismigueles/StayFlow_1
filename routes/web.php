<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
//use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\huespedesController;

// Ruta de inicio
Route::get('/', function () {
    return view('stayflow.welcomebs', ['title' => 'Bienvenido a StayFlow']);
});

Route::get('/iniciar-sesion', function () {
    return view('stayflow.login_color', ['title' => 'Iniciar sesión StayFlow']);
});

// Rutas de autenticación
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Rutas protegidas para usuarios autenticados
Route::middleware(['auth'])->group(function () {
    // Dashboard después del login

    Route::resource('huespedes', huespedesController::class);


    Route::get('/crear-huesped', function () {
        return view('stayflow.huespedes', ['title' => 'crear huspedes']);
    });

    // Gestión de empleados
    
});

// Incluir rutas de autenticación (si usas Laravel Breeze o Jetstream)
require __DIR__.'/auth.php';

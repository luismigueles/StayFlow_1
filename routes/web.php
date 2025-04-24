<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\huespedesController;

// Ruta de inicio
Route::get('/', function () {
    return view('stayflow.01_paginas.home', ['title' => 'Bienvenido a StayFlow']);
});

Route::get('/old', function () {
    return view('stayflow.welcomebs', ['title' => 'Página home']);
});

Route::get('/blog', function () {
    return view('stayflow.01_paginas.blog', ['title' => 'Página BLOG']);
});

Route::get('/cheatsheet', function () {
    return view('stayflow.01_paginas.cheatsheet', ['title' => 'Página Cheatsheet']);
});

Route::get('/empezar', function () {
    return view('stayflow.01_paginas.starter', ['title' => 'Página de comienzo']);
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

    Route::get('/admin', function () {
        return view('stayflow.01_paginas.admin', ['title' => 'Admin']);
    });

    Route::resource('huespedes', huespedesController::class);
    Route::resource('empleados', EmpleadosController::class);
    
});

// Incluir rutas de autenticación (si usas Laravel Breeze o Jetstream)
require __DIR__.'/auth.php';

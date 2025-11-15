<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas web para tu aplicación.
| Estas rutas son cargadas por el RouteServiceProvider dentro de un grupo
| que contiene el grupo de middleware "web".
|
*/

// Ruta por defecto de Laravel
Route::get('/', function () {
    return view('welcome');
});

// Ruta estática de bienvenida
Route::get('/bienvenida', [PaginaController::class, 'bienvenida']);

// Ruta dinámica de saludo con parámetro
Route::get('/saludo/{nombre}', [PaginaController::class, 'saludo']);

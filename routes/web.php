<?php

use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

// Página de bienvenida pública
Route::get('/', function () {
    return view('welcome');
});

// Rutas de autenticación públicas
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Rutas protegidas por autenticación
Route::middleware(['auth'])->group(function () {

    Route::get('/home', [CatalogoController::class, 'inicio'])->name('inicio');
    Route::get('/listado', [CatalogoController::class, 'listado_peliculas'])->name('listado');
    Route::get('/agregar', [CatalogoController::class, 'agregar'])->name('agregar');
    Route::get('/editar/{id}', [CatalogoController::class, 'editar'])->name('editar');
    Route::put('/edicion/{pelicula}', [CatalogoController::class, 'actualizar'])->name('actualizar');
    Route::post('/insertar', [CatalogoController::class, 'insertar_pelicula'])->name('insercion');
    Route::get('/eliminar/{id}', [CatalogoController::class, 'eliminar_pelicula'])->name('eliminar');

});

<?php
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\UsuarioController;
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
    return view('welcome');
});
Route::get('/home',[CatalogoController::class,'inicio'])->name("inicio");
Route::get('/listado',[CatalogoController::class,'listado_peliculas'])->name("listado");
Route::get('/agregar',[CatalogoController::class,'agregar'])->name("agregar");
Route::get('/editar/{id}',[CatalogoController::class,'editar'])->name("editar");
Route::put('/edicion/{pelicula}',[CatalogoController::class,'actualizar'])->name("actualizar");
Route::post('/insertar',[CatalogoController::class,'insertar_pelicula'])->name("insercion");
Route::get('/eliminar/{id}',[CatalogoController::class,'eliminar_pelicula'])->name("eliminar");

Route::get('/register',[UsuarioController::class,'register'])->name("register");
Route::post('/insertar_usuario',[UsuarioController::class,'insertar_usuario'])->name("insercion_usuario");
Route::get('/login',[UsuarioController::class,'login'])->name("login");
Route::post('/login_usuario',[UsuarioController::class,'login_usuario'])->name("login_usuario");
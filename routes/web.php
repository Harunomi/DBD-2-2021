<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\adminCrearLibroController;

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
    return view('login');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::post('/loginAttempt',[LoginController::class,'login'])->name('sesionIniciada');

Route::get('/home',[HomeController::class,'vistaPrincipal'])->name('vistaPrincipal');

Route::get('/register',[RegisterController::class,'register']);

Route::get('/verJuego/{id}',[LibroController::class,'vistaLibro'])->name('vistaLibro');

Route::get('/adminCrearLibro',[adminCrearLibroController::class,'adminCrearLibro']);

Route::get('/users',[UserController::class,'index']);
Route::get('/users/{id}',[UserController::class,'show'])->name('vistaUsuario');
Route::post('/users/create',[UserController::class,'store'])->name('realRegister');
Route::put('/users/update/{id}',[UserController::class,'update'])->name('userUpdate');
Route::delete('/users/destroy/{id}',[UserController::class,'destroy']);

Route::get('/libros',[LibroController::class,'index']);
Route::get('/libros/{id}',[LibroController::class,'show']);
Route::post('/libros/create',[LibroController::class,'store'])->name('crearLibro');
Route::put('/libros/update/{id}',[LibroController::class,'update']);
Route::delete('/libros/destroy/{id}',[LibroController::class,'destroy']);

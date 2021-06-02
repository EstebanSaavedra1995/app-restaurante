<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservaController;
use Illuminate\Support\Facades\Auth;

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


Route::get('/', HomeController::class);
/* Rutas para la reserva - create store delete update */
Route::get('/reserva/create',[ReservaController::class, 'create'])->name('reservas.create');
Route::post('/reserva',[ReservaController::class, 'store'])->name('reservas.store');

Auth::routes();

//Route::get('/home', [HomeController::class, 'index'])->name('home');

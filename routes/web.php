<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\MenuController;
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

/* create store delete update */

Route::get('/', HomeController::class)->name('home');
/* Reservas */
Route::get('/reservas/create',[ReservaController::class, 'create'])->name('reservas.create');
Route::post('/reserva/create',[ReservaController::class, 'horasAsincronas'])->name('reservas.horasAsincronas');
Route::get('/reservas',[ReservaController::class, 'index'])->name('reservas.index');
Route::post('/reserva',[ReservaController::class, 'store'])->name('reservas.store');


/* Menus */
Route::get('/menus',[MenuController::class, 'index'])->name('menus.index');
Auth::routes();

/* Route::get('/home', [HomeController::class, 'index'])->name('home'); */

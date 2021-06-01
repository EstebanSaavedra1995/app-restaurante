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

Route::get('/reserva',[ReservaController::class, 'addReserva'])->name('addReserva');

Route::post('/reserva',[ReservaController::class, 'alta'])->name('alta');

Auth::routes();

//Route::get('/home', [HomeController::class, 'index'])->name('home');

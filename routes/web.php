<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/reservation',[ReservationController::class, 'index']);

Route::post('/upload',[ReservationController::class, 'upload']);

Route::resource('/display',ReservationController::class, 'display');
  

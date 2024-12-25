<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ExteriorController;
use App\Http\Controllers\ServicesController;
use App\Models\booking;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function (){
    return view('index');
})->name('home');

Route::name('services.')->group(function () {
    Route::get('/exterior', [ServicesController::class ,'Exterior'])->name('exterior');
    Route::get('/interior', [ServicesController::class ,'Interior'])->name('interior');
    Route::get('/special', [ServicesController::class ,'Special'])->name('special');
});

Route::get('booking',[BookingController::class , 'index'])->name('booking');

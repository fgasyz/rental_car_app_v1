<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\RentalCarController;
use App\Http\Controllers\ReturnCarController;
use App\Http\Controllers\UserController;

Route::get('/', fn ()  => view('landing'));
Route::get('/register', [UserController::class, 'register_index']);
Route::post('/register', [UserController::class, 'store']);
Route::get('/login', [UserController::class, 'login_index']);
Route::post('/login', [UserController::class, 'authentication'])->name('login');
Route::get('/logout', [UserController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [CarController::class, 'all_car_index']);
    Route::get('/dashboard/addcar', [CarController::class, 'add_car_index']);
    Route::get('/dashboard/addrentalcar', [RentalCarController::class, 'add_rental_car_index']);
    Route::get('/dashboard/rentalcar', [RentalCarController::class, 'rental_car_index']);
    Route::get('/dashboard/returncar', [ReturnCarController::class, 'return_car_index']);
});

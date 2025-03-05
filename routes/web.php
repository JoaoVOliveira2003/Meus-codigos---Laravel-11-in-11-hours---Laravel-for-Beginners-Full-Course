<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\watchlist;

Route::get('/', [HomeController::class,'index'])->name(('home'));
Route::get('/signup', [SignupController::class, 'create'])->name('signup');
Route::get('/login', [LoginController::class, 'create'])->name('login');;




use App\Http\Controllers\CarController;
Route::get('/car/search', [CarController::class, 'search']);
Route::resource('car', CarController::class);

Route::get('/watchlist', [CarController::class, 'watchlist'])->name('car.watchlist');

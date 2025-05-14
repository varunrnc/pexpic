<?php

use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\Web\FrontController;
use Illuminate\Support\Facades\Route;



Route::controller(FrontController::class)->group(function() {
    Route::get('/', 'index')->name('home');
    Route::get('/product-details', 'productDetails')->name('web.product-details');
});

// User Auth 
Route::controller(UserController::class)->group(function() {
    Route::get('/user/login','login')->name('user.login');
    Route::get('/user/signup','signup')->name('user.signup');
});

Route::controller(UserDashboardController::class)->group(function() {
    Route::get('/user/dashboard', 'userDashboard')->name('user.dashboard');
});
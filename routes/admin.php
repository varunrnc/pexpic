<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Web\FrontController;
use Illuminate\Support\Facades\Route;



Route::prefix("admin")->group(function () {

    Route::get('/', function () {
        return redirect(route('admin.login'));
    });

    Route::controller(AdminDashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('admin.dashboard');
        Route::get('/register', 'registerView')->name('admin.register');
        Route::post('/register', 'register')->name('admin.register');
        Route::get('/login', 'loginView')->name('admin.login');
        Route::post('/login', 'login')->name('admin.login');
        Route::get('/logout', 'logout')->name('admin.logout');
    });
});

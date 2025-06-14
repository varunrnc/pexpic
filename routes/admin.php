<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\Blog\AdminBlogCategoryController;
use App\Http\Controllers\Admin\Blog\AdminBlogController;
use App\Http\Controllers\Admin\Category\AdminCategoryController;
use App\Http\Controllers\Admin\Product\AdminProductController;
use App\Http\Controllers\Admin\Slider\AdminSliderController;
use App\Http\Controllers\Web\FrontController;
use Illuminate\Support\Facades\Route;



Route::prefix("admin")->group(function () {

    Route::get('/', function () {
        return redirect(route('admin.login'));
    });

    Route::controller(AdminDashboardController::class)
        ->name('admin.')
        ->group(function () {
            Route::get('/dashboard', 'index')->name('dashboard');
            Route::get('/register', 'registerView')->name('register');
            Route::post('/register', 'register')->name('register');
            Route::get('/login', 'loginView')->name('login');
            Route::post('/login', 'login')->name('login');
            Route::get('/logout', 'logout')->name('logout');
        });

    Route::controller(AdminSliderController::class)
        ->name('admin.slider.')
        ->group(function () {
            Route::get('/slider', 'index')->name('index');
            Route::post('/slider-store', 'store')->name('store');
            Route::get('/slider-edit', 'edit')->name('edit');
            Route::put('/slider-update', 'update')->name('update');
            Route::put('/slider-status/{id}', 'status')->name('status');
            Route::delete('/slider-delete/{id}', 'destroy')->name('delete');
        });

    Route::controller(AdminCategoryController::class)
        ->name('admin.category.')
        ->group(function () {
            Route::get('/category', 'index')->name('index');
            Route::get('/category-create', 'create')->name('create');
            Route::post('/category-store', 'store')->name('store');
            Route::get('/category-edit', 'edit')->name('edit');
            Route::put('/category-update', 'update')->name('update');
            Route::put('/category-status/{id}', 'status')->name('status');
            Route::delete('/category-delete/{id}', 'destroy')->name('delete');
        });

        Route::controller(AdminProductController::class)
        ->name('admin.product.')
        ->group(function () {
            Route::get('/product', 'index')->name('index');
            Route::get('/product-create', 'create')->name('create');
            Route::post('/product-store', 'store')->name('store');
            Route::get('/product-edit/{id}', 'edit')->name('edit');
            Route::put('/product-update/{id}', 'update')->name('update');
            Route::put('/product-status/{id}', 'status')->name('status');
            Route::delete('/product-delete/{id}', 'destroy')->name('delete');
        });

    Route::controller(AdminBlogCategoryController::class)
        ->name('admin.blog.category.')
        ->group(function () {
            Route::get('/blog-category', 'index')->name('index');
            Route::get('/blog-category-create', 'create')->name('create');
            Route::post('/blog-category-store', 'store')->name('store');
            Route::get('/blog-category-edit', 'edit')->name('edit');
            Route::put('/blog-category-update', 'update')->name('update');
            Route::put('/blog-category-status', 'status')->name('status');
            Route::delete('/blog-category-delete', 'delete')->name('delete');
        });

    Route::controller(AdminBlogController::class)
        ->name('admin.blog.')
        ->group(function () {
            Route::get('/blog', 'index')->name('index');
            Route::get('/blog-create', 'create')->name('create');
            Route::post('/blog-store', 'store')->name('store');
            Route::get('/blog-edit', 'edit')->name('edit');
            Route::put('/blog-update', 'update')->name('update');
            Route::put('/blog-status', 'status')->name('status');
            Route::delete('/blog-delete', 'delete')->name('delete');
        });

        // check git hub
});

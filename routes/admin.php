<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:Administrator'])->prefix('admin')->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/products', [ProductController::class, 'list'])->name('admin.products');
    Route::get('/products/add', [ProductController::class, 'form'])->name('admin.products-add');
    Route::post('/products/add/submit', [ProductController::class, 'add'])->name('admin.products-submit');
    Route::get('/products/view/{slug}', [ProductController::class, 'view'])->name('admin.products-view');

    Route::get('/orders', [OrdersController::class, 'list'])->name('admin.orders');
    Route::get('/orders/track/', [OrdersController::class, 'track'])->name('admin.orders-track');

    Route::get('/categories', [CategoriesController::class, 'list'])->name('admin.categories');
    Route::get('/categories/add', [CategoriesController::class, 'form'])->name('admin.categories-add');

    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');

    Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');
});
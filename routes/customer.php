<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:Customer'])->prefix('admin')->group(function () {

    Route::get('/index', [AdminController::class, 'index'])->name('customer.index');

    Route::get('/account', [AdminController::class, 'account'])->name('customer.account');

});
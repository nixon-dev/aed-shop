<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\Shop\LandingController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('landing.index');
// })->name('landing.index');

Route::get('/', [LandingController::class, 'index'])->name('landing.index');

Route::get('/quickview/{slug}', [LandingController::class, 'quick_view'])->name('landing.quick-view');
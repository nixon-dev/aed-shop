<?php

use App\Http\Controllers\Shop\LandingController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('landing.index');
// })->name('landing.index');

Route::get('/shop', [LandingController::class, 'shop'])->name('landing.shop');
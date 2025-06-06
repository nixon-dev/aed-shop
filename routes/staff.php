<?php

use App\Http\Controllers\Staff\StaffController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:Staff'])->prefix('staff')->group(function () {

    Route::get('/index', [StaffController::class, 'index'])->name('staff.index');
});
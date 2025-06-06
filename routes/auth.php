<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\VerificationController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/api/login/', [AuthController::class, 'login_form'])->name('auth.login-form');

Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'register_form']);

Route::get('/confirm-email', [AuthController::class, 'confirm_email'])->name('auth.confirm-email');
Route::get('/verify-email/{code}', [VerificationController::class, 'verify'])->name('auth.verification');

Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
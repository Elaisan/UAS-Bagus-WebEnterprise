<?php

use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
        return view('auth.app');
})->name('splash');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'login'])->name('register');
Route::post('/vlogin', [AuthController::class, 'vlogin'])->name('vlogin');
Route::post('/resetpass', [AuthController::class, 'reset'])->name('resetpass');
Route::post('/auth/register-process', [AuthController::class, 'registerValidate'])->name('vregist');
Route::post('/auth/verify-otp', [AuthController::class, 'verifyOtp'])->name('verify.otp');
Route::post('/auth/update-password-reset', [AuthController::class, 'updatePasswordReset'])->name('update.password.reset');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('content.dashboard');
    })->name('dashboard');
    Route::get('/user', function () {
        return view('content.user');
    })->name('user');
    Route::get('/report', function () {
        return view('content.report');
    })->name('report');
});
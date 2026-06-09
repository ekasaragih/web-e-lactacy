<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeatureController;

// Authentication
Route::get('/login', [AuthController::class, 'showLogin'])->name('user.login');
Route::get('/auth/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'store'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth/logout', [AuthController::class, 'logout'])->name('user.logout');

// Guest
Route::middleware('guest')->group(function () {
    Route::get('/', [FeatureController::class, 'splash_screen'])->name('splash_screen');
    Route::get('/welcome_guest', [FeatureController::class, 'welcome'])->name('welcome_guest');
    Route::get('/welcome', [FeatureController::class, 'welcome'])->name('welcome');

});

Route::get('/beranda', [FeatureController::class, 'beranda'])->name('beranda');
Route::get('/edukasi_laktasi', [FeatureController::class, 'edukasi_laktasi'])->name('edukasi_laktasi');
Route::get('/motivasi', [FeatureController::class, 'motivasi'])->name('motivasi');
Route::get('/niat_target_menyusui', [FeatureController::class, 'niat_target_menyusui'])->name('niat_target_menyusui');
Route::get('/konseling_online', [FeatureController::class, 'konseling_online'])->name('konseling_online');




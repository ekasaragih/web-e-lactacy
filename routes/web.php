<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeatureController;

// Authentication
Route::get('/login', [AuthController::class, 'showLogin'])->name('user.login');
Route::get('/auth/register', [AuthController::class, 'register'])->name('user.register');
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
Route::get('/pre_test', [FeatureController::class, 'pre_test'])->name('pre_test');
Route::get('/edukasi_laktasi', [FeatureController::class, 'edukasi_laktasi'])->name('edukasi_laktasi');
Route::get('/motivasi', [FeatureController::class, 'motivasi'])->name('motivasi');
Route::get('/niat_target_menyusui', [FeatureController::class, 'niat_target_menyusui'])->name('niat_target_menyusui');
Route::get('/konseling_online', [FeatureController::class, 'konseling_online'])->name('konseling_online');
Route::get('/keterampilan_menyusui', [FeatureController::class, 'keterampilan_menyusui'])->name('keterampilan_menyusui');
Route::get('/monitoring_reminder', [FeatureController::class, 'monitoring_reminder'])->name('monitoring_reminder');
Route::get('/post_test', [FeatureController::class, 'post_test'])->name('post_test');

Route::post('/pre_test/submit', [FeatureController::class, 'submit_pretest'])->name('pre_test.submit');
Route::post('/post_test/submit', [FeatureController::class, 'submit_posttest'])->name('post_test.submit');
    







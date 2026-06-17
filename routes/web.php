<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Admin\AdminController as AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\ReminderController;

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

// Admin Authenticated Pages => ini nanti buat materi2 yang dinamis jadi bisa diubah sendiri sama adminnya, terus utk reply2 si usernya di konsultasi
Route::middleware(['auth', AdminMiddleware::class])->group(function () {
    Route::get('/admin/edukasi', [AdminController::class, 'edukasi'])->name('admin_edukasi');
    Route::get('/admin/preventif', [AdminController::class, 'preventif'])->name('admin_preventif');
    Route::get('/admin/progress', [AdminController::class, 'progress'])->name('admin_progress');
});

Route::middleware('auth')->group(function () {
    Route::get('/beranda', [FeatureController::class, 'beranda'])->name('beranda');
    Route::get('/pre_test', [FeatureController::class, 'pre_test'])->name('pre_test');
    Route::get('/edukasi_laktasi', [FeatureController::class, 'edukasi_laktasi'])->name('edukasi_laktasi');
    Route::get('/motivasi', [FeatureController::class, 'motivasi'])->name('motivasi');
    Route::get('/niat_target_menyusui', [FeatureController::class, 'niat_target_menyusui'])->name('niat_target_menyusui');
    Route::get('/konseling_online', [FeatureController::class, 'konseling_online'])->name('konseling_online');
    Route::get('/keterampilan_menyusui', [FeatureController::class, 'keterampilan_menyusui'])->name('keterampilan_menyusui');
    Route::get('/monitoring_reminder', [FeatureController::class, 'monitoring_reminder'])->name('monitoring_reminder');
    Route::get('/post_test', [FeatureController::class, 'post_test'])->name('post_test');
    Route::get('/dukungan_sosial', [FeatureController::class, 'dukungan_sosial'])->name('dukungan_sosial');

    Route::post('/pre_test/submit', [FeatureController::class, 'submit_pretest'])->name('pre_test.submit');
    Route::post('/post_test/submit', [FeatureController::class, 'submit_posttest'])->name('post_test.submit');
});







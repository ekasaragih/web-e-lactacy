<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('splash-screen');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('features.dashboard');
})->name('dashboard');

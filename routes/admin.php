<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\SliderController;
use Illuminate\Support\Facades\Route;


/* Admin Routes */
Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

/* Profile Routes */
Route::get('profile', [AdminProfileController::class, 'index'])->name('profile');
Route::post('profile/update', [AdminProfileController::class, 'updateProfile'])->name('profile.update');
Route::post('profile/update/password', [AdminProfileController::class, 'updatePassword'])->name('password.update');

/* Slider Routes */
Route::resource('slider', SliderController::class);

<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProfileController;
use Illuminate\Support\Facades\Route;


/* Admin Routes */
Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

/* Profile Routes */
Route::get('profile', [ProfileController::class, 'index'])->name('profile');

<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ChildCategoryController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SubCategoryController;
use Illuminate\Support\Facades\Route;


/* Admin Route */
Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

/* Profile Routes */
Route::get('profile', [AdminProfileController::class, 'index'])->name('profile');
Route::post('profile/update', [AdminProfileController::class, 'updateProfile'])->name('profile.update');
Route::post('profile/update/password', [AdminProfileController::class, 'updatePassword'])->name('password.update');

/* Slider Route */
Route::resource('slider', SliderController::class);

/* Category Route */
Route::put('change-status', [CategoryController::class, 'changeStatus'])->name('category.change-status');
Route::resource('category', CategoryController::class);

/* Sub Category Route */
Route::put('sub-category.change-status', [SubCategoryController::class, 'changeStatus'])->name('sub-category.change-status');
Route::resource('sub-category', SubCategoryController::class);

/* Child Category Route */
Route::put('child-category.change-status', [ChildCategoryController::class, 'changeStatus'])->name('child-category.change-status');
Route::get('get-subcategories', [ChildCategoryController::class, 'getSubcategories'])->name('get-subcategories');
Route::resource('child-category', ChildCategoryController::class);

/* Brand Route */
Route::put('brand.change-status', [BrandController::class, 'changeStatus'])->name('brand.change-status');
Route::resource('brand', BrandController::class);

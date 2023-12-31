<?php

/**Vendor routes */

use App\Http\Controllers\Backend\VendorController;
use App\Http\Controllers\Backend\VendorProfileController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [VendorController::class,'dashboard'])->name('dashboard');
Route::get('/profile',[VendorProfileController::class,'index'])->name('profile');
Route::put('/profile',[VendorProfileController::class,'UpdateProfile'])->name('profile.update');
Route::post('/profile',[VendorProfileController::class,'UpdatePassword'])->name('password.update');

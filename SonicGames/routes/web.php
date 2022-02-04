<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProductController::class,'allData'])->name('all-data');

Route::get('/profile', function () {
    return view('profile');
});
Auth::routes();

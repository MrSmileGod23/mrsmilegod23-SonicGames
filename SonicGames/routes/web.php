<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProductController::class,'allData'])->name('all-data');
Route::get('/game/{slug_publisher}/{slug_genre}/{slug_game}',[ProductController::class,'getGame'])->name('getGame');


Auth::routes();

Route::get('/profile/{id}',[UserController::class,'user'])->name('user')->middleware('auth');

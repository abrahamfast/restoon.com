<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OfferController;

Route::get('/', [IndexController::class, 'index']);
Route::get('category/{slug}', [ProductController::class, 'index']);
Route::get('product/{id}', [ProductController::class, 'show']);
Route::get('offer/{id}', [OfferController::class, 'show']);
Route::get('newest', [ProductController::class, 'newest']);
Route::get('special', [ProductController::class, 'special']);

Route::get('contact', [ContactController::class, 'index']);



Route::get('app/profile', [ProfileController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

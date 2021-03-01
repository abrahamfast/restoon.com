<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\CartController;

Route::get('/', [IndexController::class, 'index']);
Route::get('category/{slug}', [ProductController::class, 'index']);
Route::get('product/{id}', [ProductController::class, 'show']);
Route::get('offer/{id}', [OfferController::class, 'show']);
Route::get('newest', [ProductController::class, 'newest']);
Route::get('special', [ProductController::class, 'special']);
Route::get('contact', [ContactController::class, 'index']);


Route::post('cart/add', [CartController::class, 'add']);
Route::get('cart/reset', [CartController::class, 'reset']);

Route::middleware(["middleware" => "auth"])->group(function(){
	Route::get('app', [ProfileController::class, 'index']);
	Route::get('app/wishlist', [ProfileController::class, 'index']);
	Route::get('app/orders', [OrderController::class, 'index']);
	Route::get('app/addresses', [ProfileController::class, 'index']);
	Route::get('app/offers', [ProfileController::class, 'index']);
});




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

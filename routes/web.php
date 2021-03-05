<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\VerificationController;

Route::get('/', [IndexController::class, 'index']);
Route::get('category/{slug}', [ProductController::class, 'index']);
Route::get('product/{id}', [ProductController::class, 'show']);
Route::get('offer/{id}', [OfferController::class, 'show']);
Route::get('newest', [ProductController::class, 'newest']);
Route::get('special', [ProductController::class, 'special']);
Route::get('contact', [ContactController::class, 'index']);


Route::post('cart/add', [CartController::class, 'link']);
Route::get('cart/unlink/{id}', [CartController::class, 'unlink']);
Route::get('cart/reset', [CartController::class, 'reset']);
Route::post('cart/checkout', [CartController::class, 'checkout']);
Route::get('cart/order/success', [CartController::class, 'success']);

Route::post('verification/otp', [VerificationController::class, 'send']);
Route::post('verification/check', [VerificationController::class, 'check']);

Route::middleware(["middleware" => "auth"])->group(function(){
	Route::get('app', [ProfileController::class, 'index']);
	Route::get('app/wishlist', [ProfileController::class, 'index']);
	Route::get('app/orders', [OrderController::class, 'index']);
	Route::get('app/addresses', [ProfileController::class, 'index']);
	Route::get('app/offers', [ProfileController::class, 'index']);
});




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

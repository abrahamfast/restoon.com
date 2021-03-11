<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
	OrderController, ProfileController, IndexController, ProductController,
	ContactController, AboutController, OfferController, CartController,
	VerificationController, FaqController
};
use App\Http\Controllers\Profile\{
	AccountController, DeliveryController, BillController
};

Route::get('/', [IndexController::class, 'index']);
Route::get('/faq', [FaqController::class, 'index']);
Route::get('category/{slug}', [ProductController::class, 'index']);
Route::get('product/{id}', [ProductController::class, 'show']);
Route::get('offer/{id}', [OfferController::class, 'show']);
Route::get('offer', [OfferController::class, 'index']);
Route::get('newest', [ProductController::class, 'newest']);
Route::get('special', [ProductController::class, 'special']);
Route::get('contact', [ContactController::class, 'index']);
Route::get('about', [AboutController::class, 'index']);


Route::post('cart/add', [CartController::class, 'link']);
Route::get('cart/unlink/{id}', [CartController::class, 'unlink']);
Route::get('cart/reset', [CartController::class, 'reset']);
Route::post('cart/checkout', [CartController::class, 'checkout']);
Route::get('cart/checkout/{id}', [CartController::class, 'final']);

Route::post('verification/otp', [VerificationController::class, 'send']);
Route::post('verification/check', [VerificationController::class, 'check']);

Route::middleware(["middleware" => "auth"])->group(function(){
	Route::get('app', [ProfileController::class, 'index']);
	Route::get('app/wishlist', [ProfileController::class, 'index']);
	Route::get('app/orders', [OrderController::class, 'index']);
	Route::get('app/addresses', [ProfileController::class, 'index']);
	Route::get('app/offers', [ProfileController::class, 'index']);
	Route::post('app/checkout', [OrderController::class, 'checkout']);
	Route::post('app/bill/{id}', [BillController::class, 'index']);

	Route::post('app/addresses/{id}', [AccountController::class, 'update']);
	Route::post('app/delivery/{id}', [DeliveryController::class, 'update']);
});




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

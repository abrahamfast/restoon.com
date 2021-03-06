<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
	ProfileController, IndexController, ProductController,
	ContactController, AboutController, OfferController, CartController,
    VerificationController, FaqController, SearchController,
    WishlistController
};
use App\Http\Controllers\Profile\{AccountController, Addresses, DeliveryController, BillController, OrderController};

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('category/{slug}', [ProductController::class, 'index']);
Route::get('product/{id}', [ProductController::class, 'show']);
Route::get('offer/{id}', [OfferController::class, 'show']);
Route::get('offer', [OfferController::class, 'index'])->name('offer');
Route::get('newest', [ProductController::class, 'newest'])->name('newest');
Route::get('special', [ProductController::class, 'special'])->name('special');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::view('term', 'pages.term')->name('term');
Route::view('privacy', 'pages.privacy')->name('privacy');
Route::view('refund', 'pages.refund')->name('refund');
Route::view('careers', 'pages.careers')->name('careers');

Route::get('search/{what}', [SearchController::class, 'index']);


Route::post('cart/add', [CartController::class, 'link']);
Route::get('cart/unlink/{id}', [CartController::class, 'unlink']);
Route::get('cart/reset', [CartController::class, 'reset']);
Route::post('cart/checkout', [CartController::class, 'checkout']);
Route::get('cart/checkout/{id}', [CartController::class, 'final']);

Route::post('verification/otp', [VerificationController::class, 'send']);
Route::post('verification/check', [VerificationController::class, 'check']);

Route::middleware(["middleware" => "auth"])->group(function(){
	Route::get('app', [ProfileController::class, 'index']);
	Route::get('app/wishlist', [WishlistController::class, 'index']);
	Route::get('app/orders', [OrderController::class, 'index']);
	Route::get('app/addresses', [Addresses::class, 'index'])->name('addresses');
    Route::post('app/addresses', [Addresses::class, 'store'])->name('addresses.store');
    Route::get('app/addresses/{id}/edit', [Addresses::class, 'edit'])->name('addresses.edit');
    Route::put('app/addresses/update', [Addresses::class, 'update'])->name('addresses.update');
	Route::get('app/offers', [ProfileController::class, 'index']);
	Route::post('app/checkout', [OrderController::class, 'checkout']);
	Route::get('app/bill/{id}', [BillController::class, 'index']);

	Route::post('app/addresses/{id}', [AccountController::class, 'update']);
	Route::post('app/delivery/{id}', [DeliveryController::class, 'update']);
});




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

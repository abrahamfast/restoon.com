<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/category/{slug}', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::get('newst', [ProductController::class, 'newst'])

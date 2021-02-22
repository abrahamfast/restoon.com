<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/category/{slug}', [ProductController::class, 'index']);

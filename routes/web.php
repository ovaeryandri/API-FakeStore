<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductApiController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('products')->group(function () {
    Route::get('/', [ProductApiController::class, 'index']);
    Route::get('/categories', [ProductApiController::class, 'categories']);
    Route::get('/category/{category}', [ProductApiController::class, 'getByCategory']);
    Route::get('/{id}', [ProductApiController::class, 'show']);
});

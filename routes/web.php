<?php

// use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductApiController;
use App\Http\Controllers\ValidationController;

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/kategori', function () {
//     return view('kategori');
// });

Route::get('/validation/login', [ValidationController::class, 'formLogin'])->name('formLogin');
Route::post('/login', [ValidationController::class, 'login'])->name('login');
Route::get('/validation/register', [ValidationController::class, 'formRegister'])->name('formRegister');
Route::post('/register', [ValidationController::class, 'register'])->name('register');

Route::prefix('products')->group(function () {
    Route::get('/', [ProductApiController::class, 'index'])->name('index');

    Route::post('/detail', [ProductApiController::class, 'indexDetail'])->name('indexDetail');
    Route::get('/category/{category}', [ProductApiController::class, 'getByCategory'])->name('getByCategory');


    // Route::get('/categories', [ProductApiController::class, 'categories']);
    // Route::get('/{id}', [ProductApiController::class, 'show']);
});

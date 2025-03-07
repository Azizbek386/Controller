<?php

use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;
Route::get("/", function () {
    return view("welcome");
// 1. Barcha mahsulotlarni ko'rsatish
});

Route::get('/products/search', [ProductController::class, 'search']);
Route::get('/products', [ProductController::class, 'index']);

// 2. Yangi mahsulot qo'shish
Route::get('/products/create', [ProductController::class, 'create']);

// 3. Ma'lumotni ko'rsatish

Route::get('/products/{id}', [ProductController::class, 'show']);

// 4. Ma'lumotni tahrirlash
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);

// 5. Ma'lumotni o‘chirish
Route::get('/products/{id}', [ProductController::class, 'destroy']);





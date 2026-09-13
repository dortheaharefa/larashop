<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// GET     → mengambil/menampilkan sesuatu
// POST    → mengirim/membuat sesuatu
// PUT     → memperbarui
// PATCH   → memperbarui sebagian
// DELETE  → menghapus

Route::get('/', function () {
    return view('welcome');
});

route::get('home', function(){
    return "Selamat datang diLarashop";
});

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/product/store', [ProductController::class, 'store']);
route::get('/products/show/{id}', [ProductController::class, 'show']);

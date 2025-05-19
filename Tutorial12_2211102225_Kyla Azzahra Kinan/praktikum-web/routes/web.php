<?php

/*
  NIM: 2211102205
  DAMA: Isnaeni Fatmawati
*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Redirect root ke /products
Route::get('/', function () {
    return redirect('/products');
});

// ROUTE CRUD PRODUCT
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products/store', [ProductController::class, 'store']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);

// ROUTE SESSION (opsional)
Route::get('/session-set', function () {
    session()->put('email', 'test@example.com');
    return 'Session email diset!';
});
Route::get('/session-get', function () {
    return 'Email di session: ' . session('email');
});
Route::get('/session-clear', function () {
    session()->flush();
    return 'Session dihapus';
});

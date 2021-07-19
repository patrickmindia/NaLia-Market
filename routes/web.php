<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Gloudemans\Shoppingcart\Facades\Cart;


Route::view('/', 'index')->name('home');

Route::get('/article/{name}', [ProductController::class, 'show'])->name('article.show');

Route::get('/votre-panier', [CartController::class, 'show'])->name('cart.show');
Route::post('/votre-panier', [CartController::class, 'store'])->name('cart.store');
Route::get('vide', function() {
    Cart::destroy();
});

Route::view('/tous-les-derniers-articles', 'articles.all-latest-articles')->name('all-latest-articles');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

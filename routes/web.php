<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    emotify('success', 'Bienvenue sur votre plateforme d\'achat de produit congolais');
    return view('index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/news', function () {
    return view('news');
})->name("news");

Route::get('/products', function () {
    $products = config("db.pasta");
    // Per debuggare uso dd
    // dd($products);
    return view('products', compact('products'));
})->name("products");

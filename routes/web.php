<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[PageController::class,'index'])->name('home');

Route::get('/shop',[ProductController::class,'index'])->name('shop');
Route::get('/shop/{id}',[ProductController::class,'show'])->name('product');

Route::get('/cart',[CartController::class,'cart'])->name('cart');

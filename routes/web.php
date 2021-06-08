<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

Route::get('/', [HomeController::class, 'index']);

Route::get('/category/{slug}/{id}', [CategoryController::class, 'index']);

Route::get('/product-detail/{id}', [HomeController::class , 'productDetail']);

Route::get('/add-to-cart/{id}', [HomeController::class , 'addToCart'])->name('addToCart');

Route::get('/cart',   [HomeController::class , 'cart'] );
Route::get('/update-cart', [HomeController::class , 'updateCart'])->name('updateCart');

Route::get('/delete-cart', [HomeController::class , 'deleteCart'])->name('deleteCart');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/product_list', [MainController::class, 'product_list'])->name('product_list');
Route::get('/product_list/{product_category}', [MainController::class, 'product_category']);
Route::get('/product_details/{product_id}', [MainController::class, 'product_details']);
Route::get('/login', [MainController::class, 'login'])->name('login');
Route::get('/cart', [MainController::class, 'cart'])->name('cart');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');

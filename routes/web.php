<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductContrller;

use App\Http\Controllers\Products;
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


Route::get('/products', [ProductContrller::class, 'index']);
Route::post('/add-product', [ProductContrller::class, 'store']);
Route::get('/show', [ProductContrller::class, 'show']);
Route::get('edit-product/{id}', [ProductContrller::class, 'edit']);
Route::put('update-product/{id}', [ProductContrller::class, 'update']);
Route::get('/all-product', [ProductContrller::class, 'total']);
Route::get('delete-product/{id}', [ProductContrller::class, 'destroy']);

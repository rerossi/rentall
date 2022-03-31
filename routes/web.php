<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;


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

Route::get('/', function () {
    return view('index');
});

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create/', [ProductController::class,"create"])->name('product.create');
Route::post('/product/create/', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/edit/{product}/', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/edit/{product}/', [ProductController::class, 'update'])->name('product.update');
Route::get('/product/destroy/{product}/', [ProductController::class, 'destroy'])->name('product.destroy');
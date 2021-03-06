<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\eCommerceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;

require __DIR__ . '/auth.php';

// Produtos da tela inicial
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/store', [eCommerceController::class, 'store'])->name('store');
Route::get('/search/category/{category}', [eCommerceController::class, 'searchCategory'])->name('search-category');
Route::get('/search/product/', [eCommerceController::class, 'searchProduct'])->name('search.product');
Route::get('/show/{product}', [eCommerceController::class, 'showProduct'])->name('show.product');

Route::middleware(['auth'])->group(function () {
    // Carrinho
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/{product}', [CartController::class, 'store'])->name('cart.store');
    Route::delete('/cart/{product}', [CartController::class, 'destroy'])->name('cart.destroy');
    Route::post('/order', [OrderController::class, 'store'])->name('order.store');
    Route::get('/order', [OrderController::class, 'index'])->name('order.index');

    // Produtos
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/create', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/edit/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/trash', [ProductController::class, 'trash'])->name('product.trash');
    Route::get('/product/trash/restore/{product}', [ProductController::class, 'restore'])->name('product.restore');
    Route::get('/product/destroy/{product}', [ProductController::class, 'destroy'])->name('product.destroy');

    //Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user', [UserController::class, 'update'])->name('user.update');
});


// Autenticado e admin
Route::middleware(['auth', 'admin'])->group(function () {
    // Categoria
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/create', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/edit/{category}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/trash', [CategoryController::class, 'trash'])->name('category.trash');
    Route::get('/category/trash/restore/{category}', [CategoryController::class, 'restore'])->name('category.restore');
    Route::get('/category/destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
});

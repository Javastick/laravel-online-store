<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProductController;

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
Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');

Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');

Route::middleware('auth')->group(function(){
    
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::get('/cart/delete', [CartController::class, 'delete'])->name('cart.delete');
    Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');

    Route::get('/cart/purchase', [CartController::class, 'purchase'])->name('cart.purchase');
    Route::get('/my-account/orders', [MyAccountController::class, 'orders'])->name('myaccount.orders');
});

Route::middleware('admin')->group(function(){
    Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin.home.index');
    Route::get('/admin/products', [AdminProductController::class, 'index'])->name('admin.product.index');
    Route::post('/admin/products/store', [AdminProductController::class, 'store'])->name("admin.product.store");
    Route::delete('/admin/products/{id}/delete', [AdminProductController::class, 'delete'])->name("admin.product.delete");
    Route::get('/admin/product/{id}/edit', [AdminProductController::class, 'edit'])->name('admin.product.edit');
    Route::put('/admin/product/{id}/update', [AdminProductController::class, 'update'])->name('admin.product.update');
});



<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ProductTagController;

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
    return redirect()->route('login');
});

Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])
    ->name('home')
    ->middleware('verified');

Route::middleware('verified')->name('app.')->group(function () {
    // Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

    // Route::get('/provider', [\App\Http\Controllers\ProviderController::class, 'index'])->name('provider');
    // Route::post('/provider/list', [\App\Http\Controllers\ProviderController::class, 'list'])->name('provider.list');
    // Route::get('/provider/list', [\App\Http\Controllers\ProviderController::class, 'list'])->name('provider.list');
    // Route::get('/provider/add', [\App\Http\Controllers\ProviderController::class, 'add'])->name('provider.add');
    // Route::post('/provider/add', [\App\Http\Controllers\ProviderController::class, 'add'])->name('provider.add');
    // Route::get('/provider/edit/{id}/{msg?}', [\App\Http\Controllers\ProviderController::class, 'edit'])->name('provider.edit');
    // Route::get('/provider/delete/{id}', [\App\Http\Controllers\ProviderController::class, 'delete'])->name('provider.delete');

    // Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index'])->name('product');
    // Route::get('/product/create', [\App\Http\Controllers\ProductController::class, 'create'])->name('product.create');

    Route::resource('/product', ProductController::class);
    Route::resource('/tag', TagController::class);
    Route::get('/product_tag/create/{product}', [ProductTagController::class, 'create'])->name('product-tag.create');
    Route::post('/product_tag/store/{product}', [ProductTagController::class, 'store'])->name('product-tag.store');
    Route::delete('/product_tag/destroy/{product}/{tag_id}', [ProductTagController::class, 'destroy'])->name('product-tag.destroy');
    // Route::resource('/detail_product', \App\Http\Controllers\DetailProductController::class);

    // Route::resource('/client', \App\Http\Controllers\ClientController::class);
    // Route::resource('/order', \App\Http\Controllers\OrderController::class);
    // // Route::resource('/product_order', \App\Http\Controllers\ProductOrderController::class);
    // Route::post('/product_order/store/{order}', [\App\Http\Controllers\ProductOrderController::class, 'store'])->name('product-order.store');
    // // Route::delete('/product_order/destroy/{order}/{product}',[\App\Http\Controllers\ProductOrderController::class, 'destroy'])->name('product-order.destroy');
    // Route::delete('/product_order/destroy/{product_order}/{order_id}', [\App\Http\Controllers\ProductOrderController::class, 'destroy'])->name('product-order.destroy');
});

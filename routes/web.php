<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ProductTagController;
use App\Http\Controllers\ReportController;

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
    Route::get('/report', ReportController::class, '')->name("report");
    Route::resource('/product', ProductController::class);
    Route::resource('/tag', TagController::class);
    Route::get('/product_tag/create/{product}', [ProductTagController::class, 'create'])->name('product-tag.create');
    Route::post('/product_tag/store/{product}', [ProductTagController::class, 'store'])->name('product-tag.store');
    Route::delete('/product_tag/destroy/{product}/{tag_id}', [ProductTagController::class, 'destroy'])->name('product-tag.destroy');
});

Route::fallback(function(){
    return view('Deu ruim');
});

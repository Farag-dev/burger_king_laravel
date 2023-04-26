<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',[App\Http\Controllers\FrontendContoller::class, 'index'])->name('home');
Route::get('/allproducts',[App\Http\Controllers\FrontendContoller::class, 'showProducts'])->name('allproducts');
Route::get('/details/{id}',[App\Http\Controllers\FrontendContoller::class, 'singleProduct'])->name('details');
Route::post('/makeorder', [App\Http\Controllers\FrontendContoller::class, 'store'])->name('makeorder');


Route::group([
    'prefix'=>'user',
    'middleware'=>['auth','user']
],function(){
Route::get('/cart', [App\Http\Controllers\FrontendContoller::class, 'cart'])->name('cart');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group([
    'prefix'=>'admin',
    'middleware'=>['auth', 'admin']
] ,function(){
        //product
    Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');
    Route::get('/create', [App\Http\Controllers\ProductController::class, 'create'])->name('products.create');
    Route::post('/store', [App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
    Route::get('/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit');
    Route::put('/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('products.update');
    Route::delete('/destroy/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy');
    //order
    Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('orders');
    Route::post('/orders/changeStatus/{id}', [App\Http\Controllers\OrderController::class, 'changeStatus'])->name('changeStatus');

});//adminauth

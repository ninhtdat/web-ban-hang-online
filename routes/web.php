<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\CheckAdmin;
use Symfony\Component\HttpKernel\Profiler\Profile;

// use App\Http\Middleware\EnsureTokenIsValid;

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
//frontend

//profile
Route::resource('profile', ProfileController::class);
//homepage
Route::get('home', [ProductController::class, 'index_home'])->name('homepage');
Route::get('/', [ProductController::class, 'index_home']);
//cart
Route::get('cart', [CartController::class, 'index'])->name('cart');
Route::patch('update-cart/{id}', [CartController::class, 'update'])->name('cart.update');
Route::get('delete-from-cart/{id}', [CartController::class, 'delete'])->name('cart.delete');
Route::get('add-to-cart/{id}', [CartController::class, 'create'])->name('cart.add');
//shop
Route::get('products', [ProductController::class, 'index_customer'])->name('products');
Route::get('product-details', function () {
    return view('frontend.shop.product-details');
})->name('product-details');
//search
Route::get('search',[ProductController::class,'search'])->name('search');
//order
Route::get('order', function () {
    return view('frontend.shop.order');
})->name('order');
Route::post('order', [CartController::class, 'store'])->name('order');
Route::get('order-completed', function () {
    return view('frontend.shop.complete');
})->name('completed');


//backend

Route::middleware([Authenticate::class, CheckAdmin::class])->prefix('admin')->group(function () {

    Route::resource('product', ProductController::class);
    Route::resource('product-type', ProductTypeController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('order', OrderController::class);
    Route::resource('report', ReportController::class);
    Route::get('/', [OrderController::class, 'index'])->name('admin');
});



require __DIR__ . '/auth.php';

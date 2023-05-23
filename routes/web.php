<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ReportController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\CheckAdmin;
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
Route::get('/home', function () {
    return view('frontend.homepage.index');
})->name('homepage');
Route::get('/', function () {
    return view('frontend.homepage.index');
});
Route::get('/home', [ProductController::class, 'index_home'])->name('homepage');
Route::get('/', [ProductController::class, 'index_home']);




// Route::post('/product-details', [CartController::class, 'create']);
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::patch('/update-cart/{id}', [CartController::class, 'update'])->name('cart.update');
Route::get('delete-from-cart/{id}', [CartController::class, 'delete'])->name('cart.delete');

// Route::post('/cart', [CartController::class, 'edit'])->name('cart.edit');
// Route::post('/cart/{name}', [CartController::class, 'destroy'])->name('cart.destroy');

Route::get('/products', [ProductController::class, 'index_customer'])->name('products');

Route::get('/add-to-cart/{id}', [CartController::class, 'create'])->name('cart.add');

Route::get('/order', function () {
    return view('frontend.shop.order');
})->name('order');

Route::post('/order', [CartController::class, 'store'])->name('order');


Route::get('/product-details', function () {
    return view('frontend.shop.product-details');
})->name('product-details');



Route::get('/order-complete', function () {
    return view('frontend.shop.complete');
})->name('complete');


//backend
Route::middleware([Authenticate::class, CheckAdmin::class])->group(function () {

    Route::resource('admin/product', ProductController::class);
    Route::resource('admin/product-type', ProductTypeController::class);
    Route::resource('admin/customer', CustomerController::class);
    Route::resource('admin/order', OrderController::class);
    Route::resource('admin/report', ReportController::class);
    Route::get('product/inventory', [ProductController::class, 'inventory'])->name('inventory');
    Route::get('/admin', function () {
        return view('backend.order.index');
    })->name('admin');
});
require __DIR__ . '/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
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
    return view('frontend.homepage');
})->name('homepage');
Route::get('/', function () {
    return view('frontend.homepage');
});
Route::get('/product', function () {
    return view('frontend.product');
})->name('product');
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

//backend
Route::middleware([Authenticate::class, CheckAdmin::class])->group(function () {

    Route::resource('admin/product', ProductController::class);
    Route::resource('admin/product-type', ProductTypeController::class);
    Route::resource('admin/customer', CustomerController::class);
    Route::resource('admin/order', OrderController::class);
    Route::resource('admin/report', ReportController::class);
    Route::get('product/inventory', [ProductController::class, 'inventory'])->name('inventory');
    Route::get('/admin', function() {
        return view('backend.order.index');
    })->name('admin');
});
require __DIR__ . '/auth.php';

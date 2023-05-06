<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanphamController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ReportController;

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
//backend
Route::get('/admin', function () {
    return view('backend.orders.index');
})->name('admin');
Route::get('/admin/order/detail', function () {
    return view('backend.orders.detail');
})->name('admin.order.detail');
Route::get('/admin/products', function () {
    return view('backend.products');
})->name('admin.products');
Route::get('/admin/reports', function () {
    return view('backend.reports');
})->name('admin.reports');

//frontend
Route::get('/', function () {
    return view('frontend.homepage');
})->name('homepage');
Route::get('/product', function () {
    return view('frontend.product');
})->name('product');

Route::resource('admin/sanpham', SanphamController::class);
Route::resource('admin/customers', CustomerController::class);
Route::resource('admin/orders', OrdersController::class);
Route::resource('admin/reports', ReportController::class);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReportController;
use GuzzleHttp\Middleware;

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

// Route::middleware('auth:sanpham')->get('/auth/login', function () {
//     return view('auth.login');
// });

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('backend.order.index');
    })->name('admin');
    Route::get('/order/detail', function () {
        return view('backend.order.detail');
    })->name('admin.order.detail');
    Route::get('/product', function () {
        return view('backend.products');
    })->name('admin.products');
    Route::get('/report', function () {
        return view('backend.reports');
    })->name('admin.reports');
});
// Route::get('/admin', function () {
//     return view('backend.orders.index');
// })->name('admin');
// Route::get('/admin/order/detail', function () {
//     return view('backend.orders.detail');
// })->name('admin.order.detail');
// Route::get('/admin/products', function () {
//     return view('backend.products');
// })->name('admin.products');
// Route::get('/admin/reports', function () {
//     return view('backend.reports');
// })->name('admin.reports');

//frontend
Route::get('/', function () {
    return view('frontend.homepage');
})->name('homepage');
Route::get('/product', function () {
    return view('frontend.product');
})->name('product');

Route::resource('admin/product', ProductController::class);
Route::resource('admin/product-type', ProductTypeController::class);
Route::resource('admin/customer', CustomerController::class);
Route::resource('admin/order', OrderController::class);
Route::resource('admin/report', ReportController::class);

// Route::group(['prefix' => 'admin'], function () {
//     Route::resource('admin/orders', OrdersController::class);
//     Route::resource('admin/report', ReportController::class);
// });

// Route::group(['prefix' => 'backend'], function () {
//     Route::resource('admin/orders', OrdersController::class);
//     Route::resource('admin/report', ReportController::class);
// });

// Route::group(['prefix' => 'frontend'], function () {
//     Route::resource('admin/orders', OrdersController::class);
//     Route::resource('admin/report', ReportController::class);
// });

// Route::group(['prefix' =>'sanpham'], function () {
//     Route::resource('admin/orders', OrdersController::class);
//     Route::resource('admin/report', ReportController::class);
// });



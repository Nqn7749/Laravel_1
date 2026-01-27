<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use App\Http\Middleware\checkTimeAccess;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/login', function () {
    return view('login');
})->middleware(checkTimeAccess::class);

Route::post('/checklogin', [ProductController::class, 'checkLogin']);

Route::get('/under-age', function () {
    return 'Bạn chưa đủ 13 tuổi ';
});

Route::get('/teen', function () {
    return 'Khu vực dành cho thiếu niên ';
});

Route::prefix('product')->middleware([checkTimeAccess::class])->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/', 'index')->name('product.index');
        Route::get('/add', 'create')->name('product.add');
        Route::post('/add', 'store')->name('product.store');
        Route::get('/detail/{id?}', 'getDetail')->name('product.detail');
    });
});

Route::resource('test', TestController::class);

Route::get('/sinhvien/{name?}/{mssv?}', function ($name = 'Luong Xuan Hieu', $mssv = '123456') {
    return view('sinhvien', compact('name', 'mssv'));
});

Route::get('/banco/{n}', function ($n) {
    return view('banco', compact('n'));
});


Route::fallback(function () {
    return view('error.404');
});
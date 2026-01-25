<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/login', function () {
    return view('login');
});
Route::post('/checklogin', [ProductController::class, 'checkLogin']);

Route::prefix('product')->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/', 'index')->name('product.index');
        Route::get('/add', 'create')->name('product.add');
        Route::post('/add', 'store')->name('product.store');
        Route::get('/detail/{id?}', 'getDetail')->name('product.detail');
    });

    // Route::get('/', [ProductController::class, 'index']);
    // Route::get('/add', [ProductController::class,'create'])->name('product.add');
    // Route::get('/detail/{id?}', [ProductController::class,'getDetail']);
});

Route::get('/sinhvien/{name?}/{mssv?}', function ($name = 'Luong Xuan Hieu', $mssv = '123456') {
    return view('sinhvien', compact('name', 'mssv'));
});

Route::get('/banco/{n}', function ($n) {
    return view('banco', compact('n'));
});


Route::fallback(function () {
    return view('error.404');
});
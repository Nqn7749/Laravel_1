<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::prefix('product')->group(function () {
    Route::get('/', function () {
        return view('product.index');
    })->name('product.index');

    Route::get('/add', function () {
        return view('product.add');
    })->name('add');

    Route::get('/detail', function ($id) {
        return view('product.detail', ['id' => $id]);
    });

    Route::get('/{id?}', function ($id = '123') {
        return view('product.detail', ['id' => $id]);
    })->name('product.detail');
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
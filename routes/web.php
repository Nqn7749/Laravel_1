<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/product/{id}', function (int $id) {
        return "ID: ".$id;
    });

Route::prefix('product')->group(function () {
    Route::get('/', function () {
        return view('product.index');
    });

    Route::get('/add', function () {
        return view('product.add');
    })->name('add');

    Route::get('/detail', function ($id) {
        return view('product.detail', ['id' => $id]);
    });
});

Route::fallback(function () {
    return view('error404');
});
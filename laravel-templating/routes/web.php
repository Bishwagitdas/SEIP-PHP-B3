<?php

use Illuminate\Support\Facades\Route;



Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/pondit', function () {
    return view('pondit');
});


Route::get('/admin', function () {
    return view('backend.admin.index');
});

Route::get('/product', function () {
    return view('product');
});

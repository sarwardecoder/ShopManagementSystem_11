<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/employee', function () {
    return view('employee');
});
Route::get('/product', function () {
    return view('product');
});

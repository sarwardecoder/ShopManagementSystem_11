<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/employee', function () {
    return view('employee');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/sales', function () {
    return view('sales');
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/employee', function () {
    return view('employee');
});
Route::get('/product', function () {
    return view('product');
});

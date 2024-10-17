<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::post('/index', function () {
    return view('src/index');
})->name('src.index');



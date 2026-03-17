<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/2', function () {
    return view('index2');
});

Route::get('/3', function () {
    return view('index3');
});


Route::get('/4', function () {
    return view('index4');
});

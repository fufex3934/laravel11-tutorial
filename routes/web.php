<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about/{name}', function ($name) {
    return view('about',['name' => $name]);
});

Route::get('/home', function () {
    return view('about');
});


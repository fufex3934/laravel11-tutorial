<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('home', 'home')->middleware('check1');

Route::middleware('check1')->group(function () {
    Route::view('about', 'about');
    Route::view('contact', 'about');
    Route::view('user', 'about');
});

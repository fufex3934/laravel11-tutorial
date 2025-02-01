<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('user-form','user-form');


Route::post('addUser',[UserController::class,'addUser']);

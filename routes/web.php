<?php


use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users',[UserController::class,'queries']);
Route::view('login','login');
Route::view('profile','profile');
Route::post('login',[UserController::class,'login']);
Route::get('logout',[UserController::class,'logout']);
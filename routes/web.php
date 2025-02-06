<?php


use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users',[UserController::class,'getUser']);
Route::get('students',[StudentController::class,'getStudent']);
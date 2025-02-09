<?php


use App\Http\Controllers\StudentController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::view('login','login');
Route::view('profile','profile');
Route::post('login',[UserController::class,'login']);
Route::get('logout',[UserController::class,'logout']);
Route::view('users','users');
Route::post('add',[UserController::class,'addUser']);
Route::view('upload','upload');
Route::post('upload',[UploadController::class,'upload']);
Route::view('display','display');
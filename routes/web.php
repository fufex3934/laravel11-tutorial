<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('home/profile/user', 'home')->name('hm');
Route::get('show', [HomeController::class, 'show']);

//route group with prefix
Route::prefix('student')->group(function () {
    Route::view('home', 'home');
    Route::get('show', [HomeController::class, 'show']);
    Route::get('add', [HomeController::class, 'add']);
});

//route group with controller


Route::controller(StudentController::class)->group(function () {

    Route::get('show', 'show');
    Route::get('add', 'add');
    Route::get('delete', 'delete');
    Route::get('about/{name}', 'about');
});

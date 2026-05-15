<?php

use Illuminate\Support\Facades\Route;
use app\Http\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('users',UserController::class);
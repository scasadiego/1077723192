<?php

use Illuminate\Support\Facades\Route;
use app\Http\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('users',UserController::class);

Route::middleware(['date'])->group(function(){
    Route::put('/users', [UserController::class,'index']);
    Route::delete('/users', [UserController::class,'destroy']);
});
<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/forgot_password', function () {
    return view('forgot_password');
});

Route::resource('users', UserController::class);

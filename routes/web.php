<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

//default home
Route::view('/', 'home.home');

Route::middleware('guest')->group(function () {

    Route::view('/register', 'auth.register')->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);

});

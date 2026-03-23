<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});


Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [RegisterController::class, 'store']);
Route::get('/users', [RegisterController::class, 'index']);
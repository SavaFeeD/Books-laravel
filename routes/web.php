<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route::get('/market', [BookController::class, 'all']);
Route::get('/book/{id}', [BookController::class, 'getOne']);

Route::get('/login', function () {
    return view('login', ['user' => true]);
});
Route::post('/login', [UserController::class, 'login']);

Route::get('/login/store', function () {
    return view('reg', ['message' => false]);
});
Route::post('/login/store', [UserController::class, 'store']);

Route::get('/login/logout', [UserController::class, 'logout']);

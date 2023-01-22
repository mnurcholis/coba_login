<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('index');
});
 
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

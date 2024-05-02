<?php

use Illuminate\Support\Facades\Route;
// Import Controller
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('penjual', UserController::class); 
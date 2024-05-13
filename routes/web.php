<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("/computers",\App\Http\Controllers\ComputerController::class);

Route::resource("/users",\App\Http\Controllers\UserController::class)->middleware("auth");

Route::resource("/categories",\App\Http\Controllers\CategoryController::class)->middleware("auth");

Route::resource("/computersAdmin",\App\Http\Controllers\ComputerAdminController::class, ['parameters' => ['computersAdmin' => 'computer']])->middleware("auth");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

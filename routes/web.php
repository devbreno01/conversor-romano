<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'getIndex'])->name('index');
Route::post('/', [UserController::class , 'postIndex']);



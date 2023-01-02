<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NormalController;
use App\Http\Controllers\AuthController;



Route::get('/', [NormalController::class, 'index']);
Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);

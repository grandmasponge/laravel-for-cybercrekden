<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\normalcontroller;
use app\Http\Controllers\authcontroller;



Route::get('/', [normalcontroller::class, 'index']);
Route::get('/login', [authcontroller::class, 'login']);
Route::get('/register', [authcontroller::class, 'register']);

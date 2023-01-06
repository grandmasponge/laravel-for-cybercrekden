<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NormalController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\dashboard;


//basic view
route::get( '/', function (){
    return view('index');
});

//ahs controller because neatness
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'LoginRequest']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'getResponse']);
//dosnt really need a controller;
Route::get('/dashboard', function(){
    return view('Dashoard.index_dash');
})->middleware('auth')->name('dashboard');

<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index']);
Route::get('/introduccion', [HomeController::class,'introduccion']);
Route::get('/obras', [HomeController::class,'obras']);

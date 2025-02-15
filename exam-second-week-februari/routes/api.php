<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\doaController;
use App\Http\Controllers\kotaController;
use App\Http\Controllers\userController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {

//     return $request->user();
// })->middleware('auth:sanctum');
Route::post('/login',[AuthController::class, 'login'])->name('login');

Route::middleware(['auth:sanctum'])->group(function(){
    Route::apiResource('kota',kotaController::class);
    Route::get('doa',[doaController::class, 'getapi']);
    Route::post('/logout',[AuthController::class, 'logout'])->name('logout');
});

Route::apiResource('/user', userController::class);

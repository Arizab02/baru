<?php

use App\Http\Controllers\doaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('doa', [doaController::class , 'getapi']);


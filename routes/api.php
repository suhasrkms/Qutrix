<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\AddressController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/students', [StudentController::class, 'store']);
Route::get('/students', [StudentController::class, 'index']);

Route::post('/addresses', [AddressController::class, 'store']);
Route::get('/addresses', [AddressController::class, 'index']);

Route::get('/alldata', [StudentController::class, 'getAllData']);

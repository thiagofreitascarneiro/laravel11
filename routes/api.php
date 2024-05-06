<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users', [UserController::class, 'index']);
Route::post('/user', [UserController::class, 'store']);

Route::post('/login', [UserController::class, 'login']);

Route::middleware("auth:sanctum")->group(function(){
    Route::post('/task', [TaskController::class, 'store']);
    Route::get('/tasks', [TaskController::class, 'index']);
});

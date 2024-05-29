<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Login route
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

//Register route
Route::post('/register', [RegisteredUserController::class, 'store']);


Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;

//Login route
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

//Register route
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/cats', [CatController::class, 'index']);
Route::get('/cats/{cat}/choose', [CatController::class, 'choose']);

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

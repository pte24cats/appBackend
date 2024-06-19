<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;


/*----------------------Users----------------------*/




//Login route
Route::post('/login', [AuthenticatedSessionController::class, 'store'])
->middleware('guest');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');
//Register route
Route::post('/register', [RegisteredUserController::class, 'store']);

//Get all users route
Route::put('/user/{user}', [RegisteredUserController::class, 'update']);

//Delete user route
Route::delete('/user/{user}', [RegisteredUserController::class, 'destroy']);

//Logout route
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
->middleware('guest');


//Middleware
Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


/*----------------------Cats----------------------*/

//Get cats route
Route::get('/cats', [CatController::class, 'index']);
Route::get('/cats/{cat}/choose', [CatController::class, 'choose']);

//Get single cat route
Route::post('/cats', [CatController::class, 'store']);

//Update cat route
Route::put('/cats/{cat}', [CatController::class, 'update']);

//Delete cat route
Route::delete('/cats/{cat}', [CatController::class, 'destroy']);
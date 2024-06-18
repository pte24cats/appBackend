<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::post('signup',[AuthenticatedSessionController::class,'signup']);
Route::post('login',[AuthenticatedSessionController::class,'login']);


Route::get('users', 'UserController@index');
Route::post('users', 'UserController@store');



Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

<?php

use Illuminate\Http\Requests\requests;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\api\AuthController;

Route::post('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [AuthController::class, 'register']);

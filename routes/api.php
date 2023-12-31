<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegistrationController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\Api\GameController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::middleware(['api'])->group(function () {
    /*Auth Routes*/
    Route::post('/register', RegistrationController::class);
    Route::post('/login', LoginController::class);
});


Route::middleware('auth:sanctum')->group( function () {
    Route::post('/logout', LogoutController::class);
    /*Game Routes*/
    Route::post('/start-game', [GameController::class, 'startGame']);
});

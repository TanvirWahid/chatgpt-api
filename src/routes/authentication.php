<?php

use Illuminate\Support\Facades\Route;
use Tanvir\ChatgptApi\Controllers\AuthController;

Route::group(['prefix' => 'api', 'middleware' => 'api'], function () {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);

    Route::group(['middleware' => 'auth:sanctum'], function () {
        Route::post('logout', [AuthController::class, 'logout']);
    });


});

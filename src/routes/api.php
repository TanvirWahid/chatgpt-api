<?php

use Illuminate\Support\Facades\Route;
use Tanvir\ChatgptApi\Controllers\ChatGptController;

Route::group(['prefix' => 'api', 'middleware' => 'api'], function () {

    Route::group(['middleware' => 'auth:sanctum'], function () {
        Route::get('chat-gpt-response', [ChatGptController::class, 'getResponse']);
    });

});

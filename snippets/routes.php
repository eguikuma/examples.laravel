<?php

use Illuminate\Support\Facades\Route;

Route::pattern('id', '[0-9]+');

Route::prefix('snippets')->group(function () {
    Route::prefix('users')->group(function () {
        Route::get('/', [\Snippets\UserController::class, 'get']);
        Route::get('/{id}', [\Snippets\UserController::class, 'find']);
        Route::post('/', [\Snippets\UserController::class, 'create']);
        Route::put('/{id}', [\Snippets\UserController::class, 'update']);
        Route::delete('/{id}', [\Snippets\UserController::class, 'delete']);
    });
});

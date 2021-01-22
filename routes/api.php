<?php

use App\Http\Controllers\MessageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('messages', [MessageController::class, 'index']);
Route::group(['prefix' => 'message'], function () {
    Route::post('create', [MessageController::class, 'store']);
    Route::get('edit/{id}', [MessageController::class, 'edit']);
    Route::post('update/{id}', [MessageController::class, 'update']);
    Route::delete('delete/{id}', [MessageController::class, 'destroy']);
});

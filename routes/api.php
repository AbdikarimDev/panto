<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MockEvcController;
use App\Http\Controllers\Api\PushTokenController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
use App\Http\Controllers\Api\TransactionController;

Route::post('/transactions', [TransactionController::class, 'store']);
Route::get('/transactions', [TransactionController::class, 'index']);


Route::post('/mock-evc/balance', [MockEvcController::class, 'balance']);
Route::post('/mock-evc/send', [MockEvcController::class, 'send']);

Route::post('/push-tokens', [PushTokenController::class, 'store']);
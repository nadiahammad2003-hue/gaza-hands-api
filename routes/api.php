<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/contacts', [App\Http\Controllers\contactController::class,'store']);
Route::post('/message', [App\Http\Controllers\messageController::class,'store']);
Route::post('/notifications', [App\Http\Controllers\notificationController::class,'store']);
Route::post('/categories', [App\Http\Controllers\categoryController::class,'store']);
Route::post('/donations', [App\Http\Controllers\donationController::class,'store']);
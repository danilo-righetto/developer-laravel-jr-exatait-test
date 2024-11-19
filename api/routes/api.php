<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/health/live', function () {
    return response()->json(['statusAplication' => 'Healthy', 'currentTime' => date('Y-m-d H:i:s'), 'checks' => []]);
});

Route::get('/health/ready', function () {
    return response()->json(['statusAplication' => 'Healthy', 'currentTime' => date('Y-m-d H:i:s'), 'checks' => []]);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

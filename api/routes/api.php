<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/health/live', function () {
    return response()->json(['statusAplication' => 'Healthy', 'currentTime' => date('Y-m-d H:i:s'), 'checks' => []]);
});

Route::get('/health/ready', function () {
    return response()->json(['statusAplication' => 'Healthy', 'currentTime' => date('Y-m-d H:i:s'), 'checks' => []]);
});

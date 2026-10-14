<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function () {
    return response()->json([
        'message' => 'Laravel API radi'
    ]);
});

Route::post('/score', function (Request $request) {
    return response()->json([
        'ok' => true,
        'data' => $request->all()
    ]);
});
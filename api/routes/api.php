<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/audio/sample', function (Request $request) {
    return response()->json(['url' => 'https://example.com/sample.mp3']);
});

Route::get('/audio/{filename}', function (Request $request, $filename) {
    return Storage::disk('s3')->url($filename);
});

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/upload', [App\Http\Controllers\UploadController::class, 'store'])->name('uploadFiles');
Route::post('/uploadVideo', [App\Http\Controllers\UploadController::class, 'storeVideo'])->name('uploadVideo');

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/upload', [App\Http\Controllers\UploadController::class, 'store'])->name('uploadFiles');
Route::post('/uploadVideo', [App\Http\Controllers\UploadController::class, 'storeVideo'])->name('uploadVideo');
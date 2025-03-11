<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', function (Request $request) {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    Contact::create([
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message,
    ]);

    return response()->json(['success' => 'Your message has been sent successfully!']);
})->name('contact.submit');



// Admin Routes
Route::get('/admin/add-images', [AdminController::class, 'addIIA'])->name('admin.add-images');
Route::get('/admin/add-video', [AdminController::class, 'addVideo'])->name('admin.add-video');
Route::get('/get-all-images', [AdminController::class, 'getAllImages'])->name('getAllImages');
Route::delete('/delete-image/{id}', [AdminController::class, 'destroyImages'])->name('deleteImage');
Route::delete('/delete-video/{id}', [AdminController::class, 'destroyVideos'])->name('deleteVideo');
Route::get('/get-all-videos', [AdminController::class, 'getAllVideos'])->name('getAllVideos');
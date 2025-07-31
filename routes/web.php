<?php

use App\Http\Controllers\ContentPageController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/about-me');

// Portfolio
Route::get('/{pageLink}', [ContentPageController::class, 'loadPage']);

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
});

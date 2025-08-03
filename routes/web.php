<?php

use App\Http\Controllers\ContentPageController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/about-me');

// Portfolio
Route::get('/{pageLink}', [ContentPageController::class, 'loadPage']);

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/login', function () {
        return view('admin.login');
    })->name('admin.login');

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/persional-profile', function () {
        return view('admin.persional_profile');
    })->name('admin.persional_profile');

    Route::get('/activities', function () {
        return view('admin.activities');
    })->name('admin.activities');

    Route::get('/portfolio_info', function () {
        return view('admin.portfolio_info');
    })->name('admin.portfolio_info');

    Route::get('/settings', function () {
        return view('admin.settings');
    })->name('admin.settings');
});

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentPageController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\RedirectIfAdminUnauthenticated;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/about-me');

// Portfolio
Route::get('/{pageLink}', [ContentPageController::class, 'loadPage']);

// Admin routes
// * Login | Logout
Route::get('/admin/login', [AuthController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login']);

// * Website
Route::prefix('admin')
    ->middleware([Authenticate::class])
    ->name('admin.')
    ->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::get('/persional-profile', function () {
            return view('admin.persional_profile');
        })->name('persional_profile');

        Route::get('/activities', function () {
            return view('admin.activities');
        })->name('activities');

        Route::get('/portfolio_info', function () {
            return view('admin.portfolio_info');
        })->name('portfolio_info');

        Route::get('/settings', function () {
            return view('admin.settings');
        })->name('settings');
    });

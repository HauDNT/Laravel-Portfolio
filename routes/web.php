<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/about-me');
Route::get('/about-me', [AboutController::class, 'index']);

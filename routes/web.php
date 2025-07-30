<?php

use App\Http\Controllers\ContentPageController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/about-me');

Route::get('/{pageLink}', [ContentPageController::class, 'loadPage']);

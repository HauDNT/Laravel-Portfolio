<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Auth\Middleware\Authenticate as LaravelAuthenticate;
use App\Http\Middleware\Authenticate as CustomAuthenticate;

// Khởi tạo app trước
$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Add global middleware here if needed
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Customize exception handling here if needed
    })
    ->create();

// Sau khi app đã được khởi tạo, bind middleware
$app->singleton(LaravelAuthenticate::class, CustomAuthenticate::class);

// Trả về app
return $app;


<?php

use App\Providers\AppServiceProvider;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
  ->withProviders()
  ->withRouting(
    web: __DIR__.'/../routes/web.php',
    // api: __DIR__.'/../routes/api.php',
    commands: __DIR__.'/../routes/console.php',
    // channels: __DIR__.'/../routes/channels.php',
    health: '/up',
  )
  ->withMiddleware(function (Middleware $middleware) {
    $middleware->redirectGuestsTo(fn () => route('login'));
    $middleware->redirectUsersTo(AppServiceProvider::HOME);

    $middleware->web(\App\Http\Middleware\HandleInertiaRequests::class);

    $middleware->throttleApi();

    $middleware->replace(\Illuminate\Http\Middleware\TrustProxies::class, \App\Http\Middleware\TrustProxies::class);
  })
  ->withExceptions(function (Exceptions $exceptions) {
    //
  })->create();

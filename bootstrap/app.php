<?php

use App\Http\Middleware\CheckUsername;
use App\Http\Middleware\UserAuth;
use Illuminate\Foundation\Application;
use App\Http\Middleware\RouteMiddleware;
use App\Http\Middleware\GlobalMiddleware;
use App\Http\Middleware\RouteMiddleware2;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // $middleware->append(GlobalMiddleware::class);
//---------------------------------------------------------------------------------------
        // ALIAS MIDDLEWARES
        // $middleware->alias(['user', RouteMiddleware::class]);
        // $middleware->alias(['notif', RouteMiddleware2::class]);
//---------------------------------------------------------------------------------------
        //GROUP MIDDLEWARES
        $middleware->appendToGroup('user', [
            RouteMiddleware::class,
            RouteMiddleware2::class,
            CheckUsername::class
        ]);

//---------------------------------------------------------------------------------------
        //Default MIDDLEWARE GROUP
        // $middleware->web(append: [
        //     Illuminate\Cookie\Middleware\EncryptCookies::class,
        //     Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        //     Illuminate\Session\Middleware\StartSession::class,
        //     Illuminate\View\Middleware\ShareErrorsFromSession::class,
        //     Illuminate\Routing\Middleware\SubstituteBindings::class,
        // ]);

        $middleware->api(append: [
            'throttle:api',
            Illuminate\Routing\Middleware\SubstituteBindings::class,
        ]);


//---------------------------------------------------------------------------------------
        //sorting MIDDLEWARE
        $middleware->priority( [
            Illuminate\Cookie\Middleware\EncryptCookies::class,
            Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            Illuminate\Session\Middleware\StartSession::class,
            Illuminate\View\Middleware\ShareErrorsFromSession::class,
            Illuminate\Routing\Middleware\SubstituteBindings::class,
        ]);
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

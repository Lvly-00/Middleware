<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RouteMiddleware2
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $username = $request->user()->name ?? 'Guest';
        echo '<br>';
        echo '<span style="color: blue; font-weight: bold;">Welcome ' . $username . '</span>';

        Log::info('I am in RouteMiddleware2 before');

        return $next($request);
    }
    //terminate
    // public function terminate($request, $response)
    // {
    //     echo '<br>';
    //     Log::info('I am in RouteMiddleware2 after');
    //     echo '<span style="color: green; font-weight: bold;">Response has been sent to the browser.</span>';
    // }
}

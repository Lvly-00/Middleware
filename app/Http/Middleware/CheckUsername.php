<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUsername
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();

        if (!$user || !$this->isValidUsername($user->name)) {
            // Redirect or abort if the username doesn't start with A-L
            return abort(403, 'You do not have access to this page.');
        }

        return $next($request);
    }

    /**
     * Check if the username starts with A-L.
     *
     * @param  string  $username
     * @return bool
     */
    private function isValidUsername(string $username)
    {
        $firstLetter = strtoupper(substr($username, 0, 1));
        return $firstLetter >= 'A' && $firstLetter <= 'L';
    }
}

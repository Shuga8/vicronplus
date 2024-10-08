<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = 'web')
    {

        if (Auth::guard($guard)->check()) {
            return to_route('user.dashboard');
        }

        return $next($request);
    }
}

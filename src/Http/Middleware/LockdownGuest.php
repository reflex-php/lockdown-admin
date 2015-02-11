<?php

namespace Reflex\LockdownAdmin\Http\Middleware;

use Closure;
use Illuminate\Contracts\Routing\Middleware;
use Auth;

class LockdownGuest implements Middleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::guest()) {
            return $next($request);
        }

        return redirect()->route('lockdown.home');
    }
}

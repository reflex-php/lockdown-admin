<?php

namespace Reflex\Lockdown\Http\Middleware;

use Closure;
use Illuminate\Contracts\Routing\Middleware;
use Reflex\Lockdown\Lockdown;
use Config;

class LockdownAuth extends Middleware
{
    public function handle($request, Closure $next)
    {
        $authLevelRequired  =   Config::get('lockdown::lockdown-admin.auth-level');
        if (Auth::is($authLevelRequired)) {
            return $next($request);
        }

        return redirect()->route('lockdown.login');
    }
}

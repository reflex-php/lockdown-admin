<?php

namespace Reflex\LockdownAdmin\Http\Middleware;

use Closure;
use Illuminate\Contracts\Routing\Middleware;
use Config;
use Auth;

class LockdownAuth implements Middleware
{
    public function handle($request, Closure $next)
    {
        $rolesRequired      =   Config::get('lockdown.admin.roles');
        $allRequired        =   Config::get('lockdown.admin.all');
        $afterFailedAuthUrl =   Config::get('lockdown.admin.login-route');
        if (Auth::is($rolesRequired, $allRequired)) {
            return $next($request);
        }

        return redirect()->route($afterFailedAuthUrl);
    }
}

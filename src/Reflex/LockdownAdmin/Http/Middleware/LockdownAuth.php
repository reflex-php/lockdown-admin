<?php

namespace Reflex\LockdownAdmin\Http\Middleware;

use Closure;
use Illuminate\Contracts\Routing\Middleware;
use Config;
use Auth;
use Illuminate\Contracts\Auth\Guard as GuardContract;

class LockdownAuth implements Middleware
{
    /**
     * Auth instance
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * Class Constructor
     * @param \Illuminate\Contracts\Auth\Guard $auth Auth instance
     */
    public function __construct(GuardContract $auth)
    {
        $this->auth =   $auth;
    }

    public function handle($request, Closure $next)
    {
        $rolesRequired      =   config('lockdown.admin.roles');
        $allRequired        =   config('lockdown.admin.all');
        $afterFailedAuthUrl =   config('lockdown.admin.login-route');
        if ($this->auth->is($rolesRequired, $allRequired)) {
            return $next($request);
        }

        return redirect()->route($afterFailedAuthUrl);
    }
}

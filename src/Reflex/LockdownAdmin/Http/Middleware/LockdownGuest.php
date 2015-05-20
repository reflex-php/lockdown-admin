<?php

namespace Reflex\LockdownAdmin\Http\Middleware;

use Closure;
use Illuminate\Contracts\Routing\Middleware;
use Config;
use Auth;
use Illuminate\Contracts\Auth\Guard as GuardContract;

class LockdownGuest implements Middleware
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
        if ($this->auth->guest()) {
            return $next($request);
        }

        return redirect()->route('lockdown.home');
    }
}

<?php namespace Reflex\LockdownAdmin;

use Route;
use Illuminate\Support\ServiceProvider;

class LockdownAdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views/', 'lockdown');
        $this->publishes(
            [__DIR__ . '/public/'   =>  base_path('/public')]
        );
    }

    public function register()
    {
        require __DIR__ . '/routes.php';
    }
}

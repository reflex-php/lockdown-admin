<?php namespace Reflex\LockdownAdmin;

use Route;
use Illuminate\Support\ServiceProvider;

class LockdownAdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views/', 'lockdown');
    }

    public function register()
    {
        $this->publishes(
            [__DIR__ . '/../public/adminlte'   =>  base_path('/public/adminlte')],
            'public'
        );
        require __DIR__ . '/routes.php';
    }
}

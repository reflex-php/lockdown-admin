<?php namespace Reflex\LockdownAdmin;

use Route;
use Illuminate\Support\ServiceProvider;

class LockdownAdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        require __DIR__ . '/routes.php';
        $this->loadViewsFrom(__DIR__ . '/views/', 'lockdown');
    }

    public function register()
    {
        $this->publishes(
            [__DIR__ . '/../public/adminlte'   =>  base_path('/public/adminlte')],
            'public'
        );
    }
}

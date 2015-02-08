<?php namespace Reflex\LockdownAdmin;

use Route;
use Illuminate\Support\ServiceProvider;

class LockdownAdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views/', 'lockdown');
        // $this->publishes(
        //     __DIR__ . '/public/',

        // );
    }

    public function register()
    {
        dd(base_path());
        require __DIR__ . '/routes.php';
    }
}

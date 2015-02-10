<?php namespace Reflex\LockdownAdmin;

use Route;
use Illuminate\Support\ServiceProvider;

class LockdownAdminServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred
     * 
     * @var boolean
     */
    protected $defer    =   false;

    /**
     * Bootstrap the application events
     * 
     * @return void 
     */
    public function boot()
    {
        require __DIR__ . '/routes.php';
        $this->loadViewsFrom(__DIR__ . '/views/', 'lockdown');
    }

    /**
     * Register the service provider
     * 
     * @return void 
     */
    public function register()
    {
        $this->publishes(
            [__DIR__ . '/../public/adminlte'   =>  base_path('/public/adminlte')],
            'public'
        );
    }
}

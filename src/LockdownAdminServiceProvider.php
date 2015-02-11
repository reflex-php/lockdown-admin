<?php
namespace Reflex\LockdownAdmin;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Illuminate\Foundation\Application;

/**
 * LockdownAdminServiceProvider
 */
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
        $this->registerLockdownAdminConfiguration();
        $this->publishes(
            [__DIR__ . '/../public/adminlte'   =>  base_path('/public/adminlte')],
            'public'
        );
    }

    /**
     * Register Lockdown Admin configuration
     * @return void 
     */
    protected function registerLockdownAdminConfiguration()
    {
        // Are we running an old or legacy version of Laravel?
        if ($this->isLegacyLaravel() || $this->isOldLaravel()) {
            $this->package('reflex/lockdown-admin', 'lockdown', __DIR__);
        } else {
            $this->publishes(
                [
                    __DIR__ . '/config/lockdown-admin.php'    =>  
                        config_path('lockdown-admin.php'),
                ],
                'config'
            );

            $this->mergeConfigFrom(
                __DIR__ . '/config/lockdown-admin.php', 
                'lockdown.admin'
            );
        }
    }

    /**
     * Is the application running a legacy version of Laravel?
     * @return boolean 
     */
    public function isLegacyLaravel()
    {
        return Str::startsWith(Application::VERSION, array('4.1.', '4.2.'));
    }

    /**
     * Is the application running an old version of Laravel?
     * @return boolean 
     */
    public function isOldLaravel()
    {
        return Str::startsWith(Application::VERSION, '4.0.');
    }
}

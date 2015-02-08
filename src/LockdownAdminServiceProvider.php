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
        Route::group(
            ['prefix'   =>  'lockdown'],
            function() {
                Route::get(
                    '/', 
                    [
                        'as'    =>  'lockdown.home',
                        function() {
                            return \View::make('lockdown::pages.create-role');
                        },
                    ]
                );

                Route::group(
                    ['prefix'   =>  'roles'],
                    function() {
                        Route::get(
                            '/create', 
                            [
                                'as'    =>  'lockdown.roles.create', 
                                function () {
                                    return \View::make('lockdown::pages.create-role');
                                },
                            ]
                        );

                        Route::post(
                            '/create',
                            [
                                'as'    =>  'lockdown.roles.create.store',
                                function () {
                                    return 'In Development';
                                }
                            ]
                        );
                    }
                );

            }
        );
    }
}

<?php

Route::group(
    ['namespace'    =>   'Reflex\LockdownAdmin\Http\Controllers'],
    function() {
        Route::group(
            ['prefix'   =>  'lockdown'],
            function () {
                Route::get(
                    '/', 
                    [
                        'as'    =>  'lockdown.home',
                        function() {
                            return view('lockdown::pages.home');
                        },
                    ]
                );

                Route::get('login', ['as' => 'login', function() {
                    return 'Login Please...' . pdp(Config::get('lockdown.admin'));
                }]);

                Route::resource('roles', 'RoleController');
            }
        );
    }
);

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

                Route::get('login', ['middleware' => 'lockdown.auth', 'as' => 'login', function() {
                    return 'Login Please...';
                }]);

                Route::resource('roles', 'RoleController');
            }
        );
    }
);

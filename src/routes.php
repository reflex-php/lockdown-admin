<?php

Route::group(
    ['namespace'    =>   'Reflex\LockdownAdmin\Http\Controllers'],
    function() {
        Route::group(
            ['prefix'   =>  'lockdown'],
            function () {
                Route::group(
                    ['middleware' => 'lockdown.auth'],
                    function() {
                        Route::get(
                            '/', 
                            [
                                'as'    =>  'lockdown.home',
                                function() {
                                    return view('lockdown::pages.home');
                                },
                            ]
                        );

                        Route::resource('roles', 'RoleController');
                    }
                );

                Route::group(
                    ['middleware' => 'lockdown.guest'],
                    function() {
                        Route::get('login', function() {
                            return 'Login Please...';
                        }]);
                    }
                );    
            }
        );
    }
);

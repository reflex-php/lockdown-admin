<?php

Route::group(
    [
        'prefix'   =>   'lockdown',
        'namespace'=>   'Reflex\LockdownAdmin\Http\Controllers',
    ],
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
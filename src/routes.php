<?php

Route::group(
    [
        'prefix'   =>   'lockdown'
        'namespace'=>   'Reflex\Lockdown\Http\Controllers'
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
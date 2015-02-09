<?php

Route::group(
    ['prefix'   =>  'lockdown'],
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

        Route::group(
            ['prefix'   =>  'roles'],
            function() {
                Route::resource('roles', 'RoleController');
            }
        );

    }
);
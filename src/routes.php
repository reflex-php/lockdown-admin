<?php

Route::group(
    ['prefix'   =>  'lockdown'],
    function() {
        Route::get(
            '/', 
            [
                'as'    =>  'lockdown.home',
                function() {
                    return \View::make('lockdown::pages.home');
                },
            ]
        );

        Route::group(
            ['prefix'   =>  'roles'],
            function() {
                Route::get(
                    '/',
                    [
                        'as'    =>  'lockdown.roles',
                        function () {
                            $lockdown   =   App::make('lockdown');
                            $roles      =   $lockdown->findAllRoles();
                            $dump       =   [];
                            foreach ($roles as $key => $role) {
                                $dump[] =   $role->permissions()->getAttributes();
                            }
                            dd($dump);
                            return Response::json([]);
                        },
                    ]
                );

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
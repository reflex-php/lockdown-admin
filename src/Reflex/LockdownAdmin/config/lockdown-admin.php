<?php

return [
    /**
     * Role required to access the Lockdown admin panel.
     * Accepts a string or an array.
     */
    'roles'         =>  'admin',
    /**
     * Do you require all of the above roles?
     */
    'all'           =>  false,
    /**
     * Login route to go to if used isn't in the above roles.
     */
    'login-route'   =>  'login',
];
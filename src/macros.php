<?php

HTML::macro(
    'clever_link',
    function ($route, $text, array $attributes = array()) {    
        $active =   '';
        if ($route == Request::path()) {
            $active =   ' class="active"';
        }
     
        return '<li' . $active . '>' . 
            link_to($route, $text, $attributes) . 
            '</li>';
    }
);

HTML::macro(
    'clever_resource',
    function ($route, $text, array $attributes = array()) {
        $active =   '';   
        if ($route == Route::currentRouteName()) {
            $active =   ' class="active"';
        }
     
        return '<li' . $active . '>' . 
            link_to_route($route, $text, $attributes) . 
            '</li>';
    }
);

HTML::macro(
    'clever_action',
    function ($route, $text, array $attributes = array()) {
    $active =   '';
    if ($route == Route::currentRouteAction()) {
        $active =   ' class="active"';
    }
 
    return '<li' . $active . '>' . 
        link_to_action($route, $text, $attributes) . 
        '</li>';
});

HTML::macro('error_block', function (Illuminate\Support\ViewErrorBag $errors) {
    $html   =   '';

    foreach ($errors->all('<li class="text-danger">:message</li>') as $error) {
        $html   .=  $error;
    }

    return '' === $html
        ? ''
        : '<div class="alert alert-danger"><ul>' . $html . '</ul></div>';
});

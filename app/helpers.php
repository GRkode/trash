<?php

if (!function_exists('menuOpen')) {
    function menuOpen(...$routes)
    {
        foreach ($routes as $route) {
            if(Route::currentRouteName() === $route) return 'pcoded-trigger active';
        }
    }
}

if (!function_exists('currentRouteActive')) {
    function currentRouteActive(...$routes)
    {
        foreach ($routes as $route) {
            if(Route::currentRouteName() === $route) return 'active';
        }
    }
}



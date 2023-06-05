<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;


if (!function_exists('active_link')) {
    function active_link(string $name, string $active = 'axeld_active'): string
    {
       // dd(Str::startsWith(Route::currentRouteName(), $name));
        if (strpos($name, '*')) {
            return Str::startsWith(Route::currentRouteName(), $name) ? $active : '';
        } else {
            return Route::is($name) ? $active : '';
        }
    }
}


<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');

    $router->get('auth/login', '\App\Admin\Controllers\Auth\LoginController@showLoginForm')->name('login');

    $router->get('auth/register', '\App\Admin\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');

    $router->post('auth/register', '\App\Admin\Controllers\Auth\RegisterController@register')->name('register.create');

});

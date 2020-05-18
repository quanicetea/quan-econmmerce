<?php

use Illuminate\Routing\Router;
/** @var Router $router */
$router->get('/', [
    'uses' => 'Site\SiteController@index',
    'as' => 'site.homepage',
    'middleware' => config('asgard.page.config.middleware'),
]);
<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/api'], function (Router $router) {
    $router->bind('api', function ($id) {
        return app('Modules\Api\Repositories\ApiRepository')->find($id);
    });
    $router->get('apis', [
        'as' => 'admin.api.api.index',
        'uses' => 'ApiController@index',
        'middleware' => 'can:api.apis.index'
    ]);
    $router->get('apis/create', [
        'as' => 'admin.api.api.create',
        'uses' => 'ApiController@create',
        'middleware' => 'can:api.apis.create'
    ]);
    $router->post('apis', [
        'as' => 'admin.api.api.store',
        'uses' => 'ApiController@store',
        'middleware' => 'can:api.apis.create'
    ]);
    $router->get('apis/{api}/edit', [
        'as' => 'admin.api.api.edit',
        'uses' => 'ApiController@edit',
        'middleware' => 'can:api.apis.edit'
    ]);
    $router->put('apis/{api}', [
        'as' => 'admin.api.api.update',
        'uses' => 'ApiController@update',
        'middleware' => 'can:api.apis.edit'
    ]);
    $router->delete('apis/{api}', [
        'as' => 'admin.api.api.destroy',
        'uses' => 'ApiController@destroy',
        'middleware' => 'can:api.apis.destroy'
    ]);
// append
        
});

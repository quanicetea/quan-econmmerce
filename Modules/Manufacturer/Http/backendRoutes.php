<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/manufacturer'], function (Router $router) {
    $router->bind('manufacturer', function ($id) {
        return app('Modules\Manufacturer\Repositories\ManufacturerRepository')->find($id);
    });
    $router->get('manufacturers', [
        'as' => 'admin.manufacturer.manufacturer.index',
        'uses' => 'ManufacturerController@index',
        'middleware' => 'can:manufacturer.manufacturers.index'
    ]);
    $router->get('manufacturers/create', [
        'as' => 'admin.manufacturer.manufacturer.create',
        'uses' => 'ManufacturerController@create',
        'middleware' => 'can:manufacturer.manufacturers.create'
    ]);
    $router->post('manufacturers', [
        'as' => 'admin.manufacturer.manufacturer.store',
        'uses' => 'ManufacturerController@store',
        'middleware' => 'can:manufacturer.manufacturers.create'
    ]);
    $router->get('manufacturers/{manufacturer}/edit', [
        'as' => 'admin.manufacturer.manufacturer.edit',
        'uses' => 'ManufacturerController@edit',
        'middleware' => 'can:manufacturer.manufacturers.edit'
    ]);
    $router->put('manufacturers/{manufacturer}', [
        'as' => 'admin.manufacturer.manufacturer.update',
        'uses' => 'ManufacturerController@update',
        'middleware' => 'can:manufacturer.manufacturers.edit'
    ]);
    $router->delete('manufacturers/{manufacturer}', [
        'as' => 'admin.manufacturer.manufacturer.destroy',
        'uses' => 'ManufacturerController@destroy',
        'middleware' => 'can:manufacturer.manufacturers.destroy'
    ]);
// append
    $router->get('datatable', [
        'as' => 'admin.manufacturer.manufacturer.datatable',
        'uses' => 'ManufacturerController@datatable',
        'middleware' => 'can:manufacturer.manufacturers.index'
    ]);
});

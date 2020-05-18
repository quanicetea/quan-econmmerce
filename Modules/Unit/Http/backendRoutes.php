<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/unit'], function (Router $router) {
    $router->bind('unit', function ($id) {
        return app('Modules\Unit\Repositories\UnitRepository')->find($id);
    });
    $router->get('units', [
        'as' => 'admin.unit.unit.index',
        'uses' => 'UnitController@index',
        'middleware' => 'can:unit.units.index'
    ]);
    $router->get('units/create', [
        'as' => 'admin.unit.unit.create',
        'uses' => 'UnitController@create',
        'middleware' => 'can:unit.units.create'
    ]);
    $router->post('units', [
        'as' => 'admin.unit.unit.store',
        'uses' => 'UnitController@store',
        'middleware' => 'can:unit.units.create'
    ]);
    $router->get('units/{unit}/edit', [
        'as' => 'admin.unit.unit.edit',
        'uses' => 'UnitController@edit',
        'middleware' => 'can:unit.units.edit'
    ]);
    $router->put('units/{unit}', [
        'as' => 'admin.unit.unit.update',
        'uses' => 'UnitController@update',
        'middleware' => 'can:unit.units.edit'
    ]);
    $router->delete('units/{unit}', [
        'as' => 'admin.unit.unit.destroy',
        'uses' => 'UnitController@destroy',
        'middleware' => 'can:unit.units.destroy'
    ]);
    $router->get('datatable', [
        'as' => 'admin.unit.unit.datatable',
        'uses' => 'UnitController@datatable',
        'middleware' => 'can:unit.units.index'
    ]);
// append

});

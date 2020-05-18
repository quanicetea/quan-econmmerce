<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/country'], function (Router $router) {
    $router->bind('country', function ($id) {
        return app('Modules\Country\Repositories\CountryRepository')->find($id);
    });
    $router->get('countries', [
        'as' => 'admin.country.country.index',
        'uses' => 'CountryController@index',
        'middleware' => 'can:country.countries.index'
    ]);
    $router->get('countries/create', [
        'as' => 'admin.country.country.create',
        'uses' => 'CountryController@create',
        'middleware' => 'can:country.countries.create'
    ]);
    $router->post('countries', [
        'as' => 'admin.country.country.store',
        'uses' => 'CountryController@store',
        'middleware' => 'can:country.countries.create'
    ]);
    $router->get('countries/{country}/edit', [
        'as' => 'admin.country.country.edit',
        'uses' => 'CountryController@edit',
        'middleware' => 'can:country.countries.edit'
    ]);
    $router->put('countries/{country}', [
        'as' => 'admin.country.country.update',
        'uses' => 'CountryController@update',
        'middleware' => 'can:country.countries.edit'
    ]);
    $router->delete('countries/{country}', [
        'as' => 'admin.country.country.destroy',
        'uses' => 'CountryController@destroy',
        'middleware' => 'can:country.countries.destroy'
    ]);
    $router->bind('quocgia', function ($id) {
        return app('Modules\Country\Repositories\QuocGiaRepository')->find($id);
    });
    $router->get('quocgias', [
        'as' => 'admin.country.quocgia.index',
        'uses' => 'QuocGiaController@index',
        'middleware' => 'can:country.quocgias.index'
    ]);
    $router->get('quocgias/create', [
        'as' => 'admin.country.quocgia.create',
        'uses' => 'QuocGiaController@create',
        'middleware' => 'can:country.quocgias.create'
    ]);
    $router->post('quocgias', [
        'as' => 'admin.country.quocgia.store',
        'uses' => 'QuocGiaController@store',
        'middleware' => 'can:country.quocgias.create'
    ]);
    $router->get('quocgias/{quocgia}/edit', [
        'as' => 'admin.country.quocgia.edit',
        'uses' => 'QuocGiaController@edit',
        'middleware' => 'can:country.quocgias.edit'
    ]);
    $router->put('quocgias/{quocgia}', [
        'as' => 'admin.country.quocgia.update',
        'uses' => 'QuocGiaController@update',
        'middleware' => 'can:country.quocgias.edit'
    ]);
    $router->delete('quocgias/{quocgia}', [
        'as' => 'admin.country.quocgia.destroy',
        'uses' => 'QuocGiaController@destroy',
        'middleware' => 'can:country.quocgias.destroy'
    ]);
// append


});

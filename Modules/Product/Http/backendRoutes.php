<?php

use Illuminate\Routing\Router;
/** @var Router $router */
$router->post('/uploadImage', [
    'as' => 'product.uploadImage',
    'uses' => 'ProductController@uploadImage'
]);
$router->group(['prefix' =>'/product'], function (Router $router) {
    $router->bind('product', function ($uuidFieldName) {
        return app('Modules\Product\Entities\Product')->findByUUID($uuidFieldName);
    });
    $router->get('products', [
        'as' => 'admin.product.product.index',
        'uses' => 'ProductController@index',
        'middleware' => 'can:product.products.index'
    ]);
    $router->get('products/create', [
        'as' => 'admin.product.product.create',
        'uses' => 'ProductController@create',
        'middleware' => 'can:product.products.create'
    ]);
    $router->post('products', [
        'as' => 'admin.product.product.store',
        'uses' => 'ProductController@store',
        'middleware' => 'can:product.products.create'
    ]);
    $router->get('products/{product}/edit', [
        'as' => 'admin.product.product.edit',
        'uses' => 'ProductController@edit',
        'middleware' => 'can:product.products.edit'
    ]);
    $router->put('products/{product}', [
        'as' => 'admin.product.product.update',
        'uses' => 'ProductController@update',
        'middleware' => 'can:product.products.edit'
    ]);
    $router->delete('products/{product}', [
        'as' => 'admin.product.product.destroy',
        'uses' => 'ProductController@destroy',
        'middleware' => 'can:product.products.destroy'
    ]);
// append
    $router->get('test', [
        'as' => 'admin.product.product.test',
        'uses' => 'ProductController@test',
    ]);
    $router->get('datatable', [
        'as' => 'admin.product.product.datatable',
        'uses' => 'ProductController@datatable',
        'middleware' => 'can:product.products.index'
    ]);
});

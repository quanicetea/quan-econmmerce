<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/order'], function (Router $router) {
    $router->bind('order', function ($id) {
        return app('Modules\Order\Repositories\OrderRepository')->find($id);
    });
    $router->get('orders', [
        'as' => 'admin.order.order.index',
        'uses' => 'OrderController@index',
        'middleware' => 'can:order.orders.index'
    ]);
    $router->get('orders/create', [
        'as' => 'admin.order.order.create',
        'uses' => 'OrderController@create',
        'middleware' => 'can:order.orders.create'
    ]);
    $router->post('orders', [
        'as' => 'admin.order.order.store',
        'uses' => 'OrderController@store',
        'middleware' => 'can:order.orders.create'
    ]);
    $router->get('orders/{order}/edit', [
        'as' => 'admin.order.order.edit',
        'uses' => 'OrderController@edit',
        'middleware' => 'can:order.orders.edit'
    ]);
    $router->put('orders/{order}', [
        'as' => 'admin.order.order.update',
        'uses' => 'OrderController@update',
        'middleware' => 'can:order.orders.edit'
    ]);
    $router->delete('orders/{order}', [
        'as' => 'admin.order.order.destroy',
        'uses' => 'OrderController@destroy',
        'middleware' => 'can:order.orders.destroy'
    ]);
    $router->bind('orderdetail', function ($id) {
        return app('Modules\Order\Repositories\OrderDetailRepository')->find($id);
    });
    $router->get('orderdetails', [
        'as' => 'admin.order.orderdetail.index',
        'uses' => 'OrderDetailController@index',
        'middleware' => 'can:order.orderdetails.index'
    ]);
    $router->get('orderdetails/create', [
        'as' => 'admin.order.orderdetail.create',
        'uses' => 'OrderDetailController@create',
        'middleware' => 'can:order.orderdetails.create'
    ]);
    $router->post('orderdetails', [
        'as' => 'admin.order.orderdetail.store',
        'uses' => 'OrderDetailController@store',
        'middleware' => 'can:order.orderdetails.create'
    ]);
    $router->get('orderdetails/{orderdetail}/edit', [
        'as' => 'admin.order.orderdetail.edit',
        'uses' => 'OrderDetailController@edit',
        'middleware' => 'can:order.orderdetails.edit'
    ]);
    $router->put('orderdetails/{orderdetail}', [
        'as' => 'admin.order.orderdetail.update',
        'uses' => 'OrderDetailController@update',
        'middleware' => 'can:order.orderdetails.edit'
    ]);
    $router->delete('orderdetails/{orderdetail}', [
        'as' => 'admin.order.orderdetail.destroy',
        'uses' => 'OrderDetailController@destroy',
        'middleware' => 'can:order.orderdetails.destroy'
    ]);
    $router->bind('orderadmin', function ($id) {
        return app('Modules\Order\Repositories\OrderAdminRepository')->find($id);
    });
    $router->get('orderadmins', [
        'as' => 'admin.order.orderadmin.index',
        'uses' => 'OrderAdminController@index',
        'middleware' => 'can:order.orderadmins.index'
    ]);
    $router->get('orderadmins/create', [
        'as' => 'admin.order.orderadmin.create',
        'uses' => 'OrderAdminController@create',
        'middleware' => 'can:order.orderadmins.create'
    ]);
    $router->post('orderadmins', [
        'as' => 'admin.order.orderadmin.store',
        'uses' => 'OrderAdminController@store',
        'middleware' => 'can:order.orderadmins.create'
    ]);
    $router->get('orderadmins/{orderadmin}/edit', [
        'as' => 'admin.order.orderadmin.edit',
        'uses' => 'OrderAdminController@edit',
        'middleware' => 'can:order.orderadmins.edit'
    ]);
    $router->put('orderadmins/{orderadmin}', [
        'as' => 'admin.order.orderadmin.update',
        'uses' => 'OrderAdminController@update',
        'middleware' => 'can:order.orderadmins.edit'
    ]);
    $router->delete('orderadmins/{orderadmin}', [
        'as' => 'admin.order.orderadmin.destroy',
        'uses' => 'OrderAdminController@destroy',
        'middleware' => 'can:order.orderadmins.destroy'
    ]);
// append

    $router->get('order/data-table', [
        'as' => 'admin.order.order.data-table',
        'uses' => 'OrderController@dataTable',
        'middleware' => 'can:order.orders.index'
    ]);
    //view detail của admin
    $router->get('order/{order}/view-detail', [
        'as' => 'admin.order.order.view-detail',
        'uses' => 'OrderController@viewDetail',
        'middleware' => 'can:order.orderdetails.index'
    ]);

    //view detail của shop
    $router->get('order/{order}/view-detail/{ci}', [
        'as' => 'admin.order.order.view-detail-shop',
        'uses' => 'OrderController@viewDetailShop',
        'middleware' => 'can:order.orderdetails.index'
    ]);
    $router->post('order/change-status', [
        'as' => 'admin.order.order.change-status',
        'uses' => 'OrderController@changeStatus',
        'middleware' => 'can:order.orders.index'
    ]);
});

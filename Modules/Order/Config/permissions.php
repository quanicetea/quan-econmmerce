<?php

return [
    'order.orders' => [
        'index' => 'order::orders.list resource',
        'create' => 'order::orders.create resource',
        'edit' => 'order::orders.edit resource',
        'destroy' => 'order::orders.destroy resource',
    ],
    'order.orderdetails' => [
        'index' => 'order::orderdetails.list resource',
        'create' => 'order::orderdetails.create resource',
        'edit' => 'order::orderdetails.edit resource',
        'destroy' => 'order::orderdetails.destroy resource',
    ],
// append


];

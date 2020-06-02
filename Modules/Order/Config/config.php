<?php

return [
    'name' => 'Order',
    'status'=>[
    	0 =>trans('order::orders.table.ordered'),
    	1 =>trans('order::orders.table.processed'),
    	2 =>trans('order::orders.table.delivering'),
    	3=>trans('order::orders.table.completed'),
    	4=>trans('order::orders.table.cancel'),
    ]
];

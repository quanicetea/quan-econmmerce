<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->post('/uploadImage', [
    'as' => 'api.uploadImage',
    'uses' => '\Modules\Api\Http\Controllers\Admin\ApiController@uploadImage'
]);
include_once('Routes/city.php');
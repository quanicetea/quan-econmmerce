<?php 

use Illuminate\Routing\Router;

$router->group(['middleware' => ['api.token']], function (Router $router){
	$router->get('/countries',[
        'uses'=>'\Modules\Api\Http\Controllers\Api\CountryController@index',
        'as'=>'api.countries']);
});
$router->group(['middleware' => ['api.token']], function (Router $router){
	$router->get('/countries/detail',[
        'uses'=>'\Modules\Api\Http\Controllers\Api\CountryController@show',
        'as'=>'api.countries.show']);
});
$router->group(['middleware' => ['api.token']], function (Router $router){
	$router->post('/countries/create',[
        'uses'=>'\Modules\Api\Http\Controllers\Api\CountryController@store',
        'as'=>'api.countries.create']);
});
$router->group(['middleware' => ['api.token']], function (Router $router){
	$router->put('/countries/update',[
        'uses'=>'\Modules\Api\Http\Controllers\Api\CountryController@update',
        'as'=>'api.countries.update']);
});
$router->group(['middleware' => ['api.token']], function (Router $router){
	$router->delete('/countries/delete',[
        'uses'=>'\Modules\Api\Http\Controllers\Api\CountryController@destroy',
        'as'=>'api.countries.destroy']);
});
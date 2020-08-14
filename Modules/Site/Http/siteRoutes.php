<?php

use Illuminate\Routing\Router;
/** @var Router $router */
$router->get('/', [
    'uses' => 'Site\SiteController@index',
    'as' => 'site.homepage',
    'middleware' => config('asgard.page.config.middleware'),
]);
$router->get('/cart-empty', [
    'uses' => 'Site\SiteController@cartEmpty',
    'as' => 'site.cart-empty',
    'middleware' => config('asgard.page.config.middleware'),
]);
$router->get('/cart', [
    'uses' => 'Site\SiteController@cart',
    'as' => 'site.cart',
    'middleware' => config('asgard.page.config.middleware'),
]);
$router->get('/checkout', [
    'uses' => 'Site\SiteController@checkout',
    'as' => 'site.checkout',
    'middleware' => config('asgard.page.config.middleware'),
]);
$router->post('/postcheckout', [
    'uses' => 'Site\SiteController@postcheckout',
    'as' => 'site.postcheckout',
    'middleware' => config('asgard.page.config.middleware'),
]);
$router->get('/confirm', [
    'uses' => 'Site\SiteController@confirm',
    'as' => 'site.confirm',
    'middleware' => config('asgard.page.config.middleware'),
]);
$router->post('/order', [
    'uses' => 'Site\SiteController@order',
    'as' => 'site.order',
    'middleware' => config('asgard.page.config.middleware'),
]);
$router->get('/success', [
    'uses' => 'Site\SiteController@success',
    'as' => 'site.success',
    'middleware' => config('asgard.page.config.middleware'),
]);
// $router->get('/product-by-category', [
//     'uses' => 'Site\SiteController@productByCateGory',
//     'as' => 'site.product-by-category',
//     'middleware' => config('asgard.page.config.middleware'),
// ]);

//show sp ra mini cart
$router->get('site/show', [
    'uses' => 'Site\SiteController@show',
    'as' => 'site.showcart',
    'middleware' => config('asgard.page.config.middleware'),
]);

// thêm sp vào cart
$router->get('site/add', [
    'uses' => 'Site\SiteController@add',
    'as' => 'site.addcart',
    'middleware' => config('asgard.page.config.middleware'),
]);

//ajax tỉnh thành quận huyện phường xã
$router->get('site/ajax/city', [
    'uses' => 'Site\SiteController@city',
    'as' => 'site.city',
    'middleware' => config('asgard.page.config.middleware'),
]);
$router->get('site/ajax/district', [
    'uses' => 'Site\SiteController@district',
    'as' => 'site.district',
    'middleware' => config('asgard.page.config.middleware'),
]);
$router->get('site/ajax/ward', [
    'uses' => 'Site\SiteController@ward',
    'as' => 'site.ward',
    'middleware' => config('asgard.page.config.middleware'),
]);

//thêm bớt và xoá sản phẩm trong giỏ hàng
$router->get('site/update', [
    'uses' => 'Site\SiteController@update',
    'as' => 'site.updatecart',
    'middleware' => config('asgard.page.config.middleware'),
]);
$router->get('site/remove', [
    'uses' => 'Site\SiteController@remove',
    'as' => 'site.removecart',
    'middleware' => config('asgard.page.config.middleware'),
]);

$router->get('search', [
    'uses' => 'Site\SiteController@search',
    'as' => 'site.search',
    'middleware' => config('asgard.page.config.middleware'),
]);

$router->get('category/{slug}', [
    'uses' => 'Site\SiteController@productByCategory',
    'as' => 'site.product.category',
    'middleware' => config('asgard.page.config.middleware'),
]);
$router->get('/register', [
    'uses' => 'Site\SiteController@getRegister',
    'as' => 'site.get.register',
    'middleware' => config('asgard.page.config.middleware'),
]);
$router->post('/register', [
    'uses' => 'Site\SiteController@register',
    'as' => 'site.register',
    'middleware' => config('asgard.page.config.middleware'),
]);
$router->get('/login', [
    'uses' => 'Site\SiteController@getLogin',
    'as' => 'site.get.login',
    'middleware' => config('asgard.page.config.middleware'),
]);
$router->post('/postLogin', [
    'uses' => 'Site\SiteController@postLogin',
    'as' => 'site.post.login',
    'middleware' => config('asgard.page.config.middleware'),
]);
$router->get('/getLogout', [
    'uses' => 'Site\SiteController@getLogout',
    'as' => 'site.get.logout',
    'middleware' => config('asgard.page.config.middleware'),
]);
$router->get('/profile/{id}', [
    'uses' => 'Site\SiteController@getProfile',
    'as' => 'site.get.profile',
    'middleware' => config('asgard.page.config.middleware'),
]);
$router->post('/profile/{id}', [
    'uses' => 'Site\SiteController@updateProfile',
    'as' => 'site.post.updateprofile',
    'middleware' => config('asgard.page.config.middleware'),
]);
$router->get('/forgotpassword', [
    'uses' => 'Site\SiteController@getForgotpassword',
    'as' => 'site.get.forgotpassword',
    'middleware' => config('asgard.page.config.middleware'),
]);
$router->get('/detail/{unique_id}', [
    'uses' => 'Site\SiteController@detail',
    'as' => 'site.detail',
    'middleware' => config('asgard.page.config.middleware'),
]);

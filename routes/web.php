<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->get('/key', function () {
    return str_random(32);
});
$router->get('/biodata', function () {
    return "Nama : Naufal Widhi Ashshiddiqi <br> NIM : 185150701111015";
});
$router->get('user', 'UserController@index');

$router->get('/id/{id}', 'UserController@getdataid');

$router->get('/delete/{id}', 'UserController@delete');

$router->post('tambahData', 'UserController@tambahData');

$router->post('update', 'UserController@update');
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

//get semua data posts
$router->get('posts', 'PostsController@index');

//---USER---
//get semua data user
$router->get('/users', 'UsersController@index');

//post data user
$router->post('/users', 'UsersController@store');

//get data user berdasarkan id
$router->get('/users/{id}', 'UsersController@show');

//update data user berdasarkan id
$router->put('/users/{id}', 'UsersController@update');

//delete data user berdasarkan id
$router->delete('/users/{id}', 'UsersController@destroy');

//---SENSOR---CRUD
//get data sensor
$router->get('/sensors/datahistory', 'SensorsController@history');
//get data terbaru
$router->get('/sensors/datarealtime', 'SensorsController@realtime');
//post data sensor
$router->post('/sensors/input', 'SensorsController@store');
//get data sensor berdasarkan id
$router->get('/sensors/{id}', 'SensorsController@show');
//update data sensor berdasarkan id
$router->put('/sensors/{id}', 'SensorsController@update');
//delete data sensor berdasarkan id
$router->delete('/sensors/{id}', 'SensorsController@destroy');
<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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


$router->get('/Display','userController@displayUser');
$router->post('/Add','userController@addUser');
$router->put('/Update/{id}','userController@updateUser');
$router->get('/View/{id}','userController@readUser');
$router->delete('/Delete/{id}','userController@deleteUser');



//Login
$router->get('/login', [
    'as' => 'login', 'uses' => 'userController@loginView'
]);

$router->get('/dashboard', [
    'as' => 'dash', 'uses' => 'userController@dash'
]);

$router->get('/check','userController@checkUser');
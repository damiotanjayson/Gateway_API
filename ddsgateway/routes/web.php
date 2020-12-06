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

$router->group(['middleware'=>'client.credentials'],function() use ($router){

    $router->get('/users1','user1Controller@displayUser'); //get all user from ddsbe
    $router->post('/users1','user1Controller@addUser'); //add user to ddsbe
    $router->get('/users1/{id}', 'user1Controller@readUser'); // get user by id from ddsbe
    $router->put('/users1/{id}','user1Controller@updateUser'); // update user record from ddsbe
    $router->delete('/users1/{id}', 'user1Controller@deleteUser'); //delete record  from ddsbe

    $router->get('/users2','user2Controller@displayUser'); //get all user from ddsbe
    $router->post('/users2','user2Controller@addUser'); //add user to ddsbe
    $router->get('/users2/{id}', 'user2Controller@readUser'); // get user by id from ddsbe
    $router->put('/users2/{id}','user2Controller@updateUser'); // update user record from ddsbe
    $router->delete('/users2/{id}', 'user2Controller@deleteUser'); //delete record  from ddsbe

});

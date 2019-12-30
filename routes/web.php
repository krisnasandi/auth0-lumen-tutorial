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

$router->group(['prefix' => 'api'], function () use ($router) {
    //authors
    $router->get('authors',  ['uses' => 'AuthorController@index']);
    $router->get('authors/{id}', ['uses' => 'AuthorController@show']);
    $router->post('authors', ['uses' => 'AuthorController@create']);
    $router->put('authors/{id}', ['uses' => 'AuthorController@update']);
    $router->delete('authors/{id}', ['uses' => 'AuthorController@delete']);

    //users
    $router->get('users',  ['uses' => 'UserController@index']);
    $router->get('users/{id}', ['uses' => 'UserController@show']);
    $router->post('users', ['uses' => 'UserController@create']);
    $router->put('users/{id}', ['uses' => 'UserController@update']);
    $router->delete('users/{id}', ['uses' => 'UserController@delete']);

    //users
    $router->get('roles',  ['uses' => 'RoleController@index']);
    $router->get('roles/{id}', ['uses' => 'RoleController@show']);
    $router->post('roles', ['uses' => 'RoleController@create']);
    $router->put('roles/{id}', ['uses' => 'RoleController@update']);
    $router->delete('roles/{id}', ['uses' => 'RoleController@delete']);
});
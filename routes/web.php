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


/*
|--------------------------------------------------------------------------
| CategoriesController
|--------------------------------------------------------------------------
*/

$router->get('categories', ['uses' => 'CategoriesController@index', 'as' => 'categories']);
$router->get('categories/{id}', ['uses' => 'CategoriesController@show', 'as' => 'category']);

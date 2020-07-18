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
    return "Hola Mundo de Lumen";
    //$router->app->version();
});
/*******************************************
  http://peliculas/test/users
  Nos envia al metodo =index= del controlador =UsersCotroller=
 *****************************************/
$router->get('users','UsersController@index');

/*******************************************
  http://peliculas/test/users
  Nos envia al metodo =index= del controlador =UsersCotroller=
 *****************************************/
$router->get('users/{id}','UsersController@showOneUser');

/*******************************************
  http://peliculas/test/users
  Nos envia al metodo =index= del controlador =UsersCotroller=
 *****************************************/
$router->post('users','UsersController@createUser');

/*******************************************
  http://peliculas/test/users
  Nos envia al metodo =index= del controlador =UsersCotroller=
 *****************************************/
$router->put('users/{id}','UsersController@updateUser');

/*******************************************
  http://peliculas/test/users
  Nos envia al metodo =index= del controlador =UsersCotroller=
 *****************************************/
$router->delete('users/{id}','UsersController@deleteUser');

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
Route::resource('api/heart', '\\App\\Http\\Controllers\\Api\\HeartController');
Route::resource('api/user', '\\App\\Http\\Controllers\\Api\\UserController');
Route::resource('api/user/random', 'Api\\RandomUserController');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::post('oauth/access_token', function() {
    return Response::json(Authorizer::issueAccessToken());
});

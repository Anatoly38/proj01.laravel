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

Route::get('/', [ 'as' => 'home', function () {
    return view('home');
}]);

Route::get('/charts', ['middleware' => 'auth', function () {
    return view('mcharts');
}]);

Route::get('/tables', function () {
    return view('table');
});

Route::get('/forms', function()
{
    return view('form');
});

Route::get('/panels', function()
{
    return View::make('panel');
});
Route::get('/buttons', function()
{
    return View::make('buttons');
});
Route::get('/notifications', function()
{
    return View::make('notifications');
});
Route::get('/typography', function()
{
    return View::make('typography');
});
Route::get('/icons', function()
{
    return View::make('icons');
});
Route::get('/grid', function()
{
    return View::make('grid');
});

Route::get('/blank', function()
{
    return view('blank');
});

Route::get('/login', function()
{
    return view('/login');
});
Route::post('/login', 'Auth\AuthController@login');

Route::get('/auth/register', function()
{
    return view('auth/register');
});
Route::put('/auth/register', 'Auth\AuthController@store');

Route::get('/auth/login', function()
{
    return view('auth/login');
});
Route::post('/auth/login', 'Auth\AuthController@login');

Route::get('/documentation', function()
{
    return view('documentation');
});
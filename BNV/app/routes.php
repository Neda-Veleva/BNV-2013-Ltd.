<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@homePage');
Route::get('/news', 'HomeController@news');
Route::get('/contacts', 'HomeController@contacts');
Route::get('/profile', 'HomeController@profile');


//categories
Route::get('/equipments', 'CategoryController@index');
Route::get('/equipments/{id}', 'CategoryController@show');

//products
Route::get('/product/{id}', 'ProductController@show');

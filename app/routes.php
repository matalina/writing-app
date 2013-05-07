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
// Index Page
Route::get('/{page?}','PostController@index')->where('page', '\d+');
// Posts - /2013/03/code-igniter-to-laravel/
Route::get('/{year}/{month}/{slug}', 'PostController@post')
	->where(array(
		'year' => '\d+',
		'month' => '\d+',
		'slug' => '[0-9a-z\-]+'
	));
// RSS Feed
Route::get('feed','PostController@feed');
// Pages - /level-up-my-life/
Route::get('/{slug}', 'PostController@page')->where('slug', '[0-9a-z\-]+');
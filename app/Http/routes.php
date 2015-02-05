<?php

Route::get('/', 'DashboardController@index');

Route::get('/user', array(
	'as' => 'user',
	'uses' => 'UserController@index',
));

Route::get('/user/create', array(
	'as' => 'user.create',
	'uses' => 'UserController@create',
));

Route::post('/user', array(
	'as' => 'user.store',
	'before' => 'csrf',
	'uses' => 'UserController@store',
));

Route::get('/user/{user}', array(
	'as' => 'user.show',
	'uses' => 'UserController@show',
));

Route::get('/user/{user}/edit', array(
	'as' => 'user.edit',
	'uses' => 'UserController@edit',
));

Route::put('/user/{user}', array(
	'as' => 'user.update',
	'before' => 'csrf',
	'uses' => 'UserController@update',
));

Route::delete('/user/{user}', array(
	'as' => 'user.destroy',
	'before' => 'csrf',
	'uses' => 'UserController@destroy',
));
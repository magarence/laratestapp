<?php

//Route::group(['middleware' => ['web']], function () {

Route::get('/{author?}', [
	'uses' => 'QuoteController@getIndex',
	'as' => 'index'
	]);

Route::post('/new', [
	'uses' => 'QuoteController@postQuote',
	'as' => 'create'
]);

Route::get('/delete/{quote_id}', [
	'uses' => 'QuoteController@getDeleteQuote',
	'as' => 'delete'
]);

Route::get('/gotemail/{author_name}', [
	'uses' => 'QuoteController@getMailCallBack',
	'as' => 'mail_callback'
]);

Route::get('/admin/login', [
	'uses' => 'AdminController@getLogin',
	'as' => 'admin.login'
]);

Route::post('/admin/login', [
	'uses' => 'AdminController@postLogin',
	'as' => 'admin.login'
]);

Route::get('/admin/dashboard', [
	'uses' => 'AdminController@getDashboard',
	'as' => 'admin.dashboard'
]);

//});
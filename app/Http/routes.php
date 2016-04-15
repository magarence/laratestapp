<?php

//Route::group(['middleware' => ['web']], function () {

Route::get('/', [
	'uses' => 'QuoteController@getIndex',
	'as' => 'index'
	]);

Route::post('/new', [
	'uses' => 'QuoteController@postQuote',
	'as' => 'create'
]);

//});
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

//});
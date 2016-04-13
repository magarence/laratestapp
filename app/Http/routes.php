<?php

//Route::group(['middleware' => ['web']], function () {
	Route::get('/', function () {
	    return view('home');
	})->name('home');

	Route::group(['prefix' => 'do'], function() {

		Route::get('/{action}/{name?}', [
				'uses' => 'NiceActionController@getNiceAction',
				'as' => 'niceaction'
			]);

		Route::post('/', [
			'uses' => 'NiceActionController@postNiceAction',
			'as' => 'benice'
		]);
	});
//});
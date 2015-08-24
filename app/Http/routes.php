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
Route::get('/ola', 'OlaController@index');

/**
 * Cria um prefixo para um conjunto de rotas
 *
*/
Route::group(['prefix' => 'books'], function() {

	Route::get('', ['as'=>'books.index', 'uses'=> 'BookController@index']);
	Route::get('create', ['as' => 'books.create', 'uses' => 'BookController@create']);
	Route::post('store', ['as'=>'books.store', 'uses'=> 'BookController@store']);
	Route::get('delete/{id}', ['as' => 'books.delete', 'uses' => 'BookController@delete']);
	Route::get('edit/{id}', ['as' => 'books.edit', 'uses' => 'BookController@edit']);
	Route::post('update/{id}', ['as'=>'books.update', 'uses'=> 'BookController@update']);

});


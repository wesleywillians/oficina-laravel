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
Route::get('/books', ['as'=>'book.index', 'uses'=> 'BookController@index']);
Route::get('/books/create', 'BookController@create');
Route::post('/books/store', ['as'=>'book.store', 'uses'=> 'BookController@store']);

Route::get('/books/delete/{id}', 'BookController@delete');
Route::get('/books/edit/{id}', 'BookController@edit');
Route::post('/books/update/{id}', ['as'=>'book.update', 'uses'=> 'BookController@update']);
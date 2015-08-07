<?php
/**
 * Blog section
 */
Route::get('/', ['as' => 'main', 'uses' => 'BlogController@index']);
Route::get('/{id}', ['as' => 'view.blog', 'uses' => 'BlogController@view']);

/**
 * Present controller
 */
get('test-view', ['as' => 'test.view', 'uses' => 'ViewController@index']);
get('db', ['as' => 'view.db', 'uses' => 'ViewController@db']);
get('insert', ['as' => 'view.insert', 'uses' => 'ViewController@insert']);
get('update', ['as' => 'view.update', 'uses' => 'ViewController@update']);
get('delete', ['as' => 'view.delete', 'uses' => 'ViewController@delete']);
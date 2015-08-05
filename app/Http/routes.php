<?php

Route::get('/', ['as' => 'main', 'uses' => 'BlogController@index']);

/**
 * Present controller
 */
get('test-view', ['as' => 'test.view', 'uses' => 'ViewController@index']);
get('db', ['as' => 'view.db', 'uses' => 'ViewController@db']);
get('insert', ['as' => 'view.db', 'uses' => 'ViewController@insert']);
get('update', ['as' => 'view.db', 'uses' => 'ViewController@update']);
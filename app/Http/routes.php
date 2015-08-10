<?php
/**
 * Present controller
 */
get('test-view', ['as' => 'test.view', 'uses' => 'ViewController@index']);
get('db', ['as' => 'view.db', 'uses' => 'ViewController@db']);
get('insert', ['as' => 'view.insert', 'uses' => 'ViewController@insert']);
get('update', ['as' => 'view.update', 'uses' => 'ViewController@update']);
get('delete', ['as' => 'view.delete', 'uses' => 'ViewController@delete']);
get('model', ['as' => 'view.model', 'uses' => 'ViewController@model']);


/**
 * Blog section
 */
get('/', ['as' => 'main', 'uses' => 'BlogController@index']);
get('create', ['as' => 'view.create', 'uses' => 'BlogController@create']);
get('/{id}', ['as' => 'view.blog', 'uses' => 'BlogController@view']);
post('store', ['as' => 'view.store', 'uses' => 'BlogController@store']);

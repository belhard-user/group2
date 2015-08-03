<?php

Route::get('/', ['as' => 'main', 'uses' => 'BlogController@index']);

get('test-view', ['as' => 'test.view', 'uses' => 'ViewController@index']);
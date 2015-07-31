<?php

Route::get('/', function () {
    return view('welcome');
});

get('test-view', ['as' => 'test.view', 'uses' => 'ViewController@index']);
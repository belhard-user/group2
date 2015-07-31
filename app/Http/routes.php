<?php

Route::get('/', function () {
    return view('welcome');
});


/**
 * Lessons for routes
 */
$routeName = "index";
Route::group(['namespace' => 'Admin', 'prefix' => 'test'], function()use( $routeName ){
    get('index/{id}', 'BarController@'.$routeName)->where('id', '\d');
});



get('test', ['as'=>'test', 'uses' => 'FooController@foo']);
// ====================
Route::group(['prefix' => 'admin'], function(){
    get('test2', function(){
        return "test2";
    });
    get('test3', function(){
        return "test3";
    });
    get('test4', function(){
        return "test4";
    });
});

// =======================
post('test', function(){
    return "this is a post"; 
});

Route::match(['get', 'post', 'put'], 'foo', function(){
    return "This is a route match";
});

Route::any('bar', ['as' => 'admin.bar', function(){
    return route('admin.bar');
}]);

get('greetings-user/user/{name?}/{age?}', function($name=null, $age=null){
    $name = isset($name) ? $name : 'Guest';
    $age = isset($age) ? $age : 25;

    return "$name $age";

    /*return url('greetings-user/user', [
        'name' => 'Neo',
        'age' => '14'
    ]);*/
})->where([
    'name' => '[a-z]+',
    'age' => '\d{1,2}'
]);
<?php
/**
 * Present controller
 */
/*get('test-view', ['as' => 'test.view', 'uses' => 'ViewController@index']);
get('db', ['as' => 'view.db', 'uses' => 'ViewController@db']);
get('insert', ['as' => 'view.insert', 'uses' => 'ViewController@insert']);
get('update', ['as' => 'view.update', 'uses' => 'ViewController@update']);
get('delete', ['as' => 'view.delete', 'uses' => 'ViewController@delete']);
get('model', ['as' => 'view.model', 'uses' => 'ViewController@model']);*/


/**
 * Blog section
 */
/*get('/', ['as' => 'main', 'uses' => 'BlogController@index']);
get('create', ['as' => 'view.create', 'uses' => 'BlogController@create']);
get('/{id}', ['as' => 'view.blog', 'uses' => 'BlogController@show']);
post('store', ['as' => 'view.store', 'uses' => 'BlogController@store']);
get('{id}/update', ['as' => 'view.update', 'uses' => 'BlogController@update']);*/

get('/', ['uses' => 'IndexController@index']);
resource('article', 'BlogController');
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);

get('test', ['middleware' => 'admin', function(){
    return 'Im is admin';
}]);

get('relation', function(){
    /*$user = \App\User::find(2);
    foreach($user->articles as $article){
        echo $article->title . '<br/>';
    }*/

    $article = \App\Article::find(11);

    $user = $article->user;

    dd($user->email);



    return view('welcome');

});



/*class Foo{
    public $bar;

    public function __construct(Bar $bar)
    {
        $this->bar = $bar;
    }
}
class Bar{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

App::bind('Foo', function($app){

    $names = collect([
        'Neo',
        'Morpheus',
        'Trinity',
        'Tank',
        'John Smith'
    ]);

    return new Foo(new Bar( $names->random() ));
});
app()->bind('Foo', function($app){

    $names = collect([
        'Neo',
        'Morpheus',
        'Trinity',
        'Tank',
        'John Smith'
    ]);

    return new Foo(new Bar( $names->random() ));
});

get('service', function(Foo $foo){
    dd($foo->bar);
});*/

get('service', 'TestController@service');

get('attach', function(){
    $article = \App\Article::first();
    $article->tags()->attach([2, 3, 4]);
});
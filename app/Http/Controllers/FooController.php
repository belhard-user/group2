<?php

namespace App\Http\Controllers;

class FooController extends Controller
{
    public function foo()
    {
        return action('FooController@foo');
    }
}
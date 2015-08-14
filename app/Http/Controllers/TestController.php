<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function getFoo()
    {

    }

    public function postBar()
    {

    }

    public function deleteJaz()
    {

    }

    public function service(\App\Classes\IFoo $foo)
    {
        echo \F::getName();
        dd($foo);
        /*$o = app()->make('\App\Classes\Foo');
        $o2 = app()->make('\App\Classes\Foo');
        $o3 = app()->make('\App\Classes\Foo');
        $o4 = app()->make('\App\Classes\Foo');
        dd($o, $o2, $o4, $o3);*/
        // dd($foo);
    }
}

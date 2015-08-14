<?php

namespace App\Classes;

use Illuminate\Support\Facades\Facade;

class FooFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return \App\Classes\IFoo::class;
    }

}
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FooProviders extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        /*app()->singleton('\App\Classes\Foo', function($app){
            $names = collect([
                'Neo',
                'Morpheus',
                'Trinity',
                'Tank',
                'John Smith'
            ]);

            return new \App\Classes\Foo($names->random());
        });*/

        app()->bind('\App\Classes\IFoo', '\App\Classes\Foo');
    }
}

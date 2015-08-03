<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \DB;

class ViewController extends Controller
{
    public function index()
    {
        $names = [
            'Neo',
            'Morpheus',
            'Trinity',
            'Tank',
            'John Smith'
        ];

        return view('partial', compact('names'));
    }

    public function db()
    {
        /*$test = DB::table('test')
            ->whereNotIn('id', ['1', '2', '5', '7'])
            ->orderBy('name')
            ->get();*/

        /*$test = DB::table('test')
            ->join('rtest', function($join){
                $join->on('test.id', '=', 'rtest.id')
                ->where('test.age', '>', 25);
            })
            ->where(function($query){
                $query->where('age', '>', 30);
            })
            ->get();*/

        $test = DB::table('test')->select(DB::raw('name, age'))->get();
        dd($test);

        $test = DB::table('test')->sum('age');
        dd($test);

        // dd($test);

        // return $test;

        return view('view.db')->withTest($test);
    }
}

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

    public function insert()
    {
        $result = DB::table('test')->insert([
            [
                'email' => 'tank@gmail.com',
                'age' => 100,
                'country_code' => 'BR',
                'name' => 'tank'
            ],
            [
                'email' => 'trinity@gmail.com',
                'age' => 100,
                'country_code' => 'BR',
                'name' => 'Trinity'
            ],
        ]);

        dd($result);
    }

    public function update()
    {
        $name = DB::table('test')->where('id', 101)->first();
        $result = DB::table('test')->where('id', 101)->increment('age', 1, ['name' => $name->name . '!!!']);

        return view('view.update')->with('result', $result)->with('name', $name);
    }
}

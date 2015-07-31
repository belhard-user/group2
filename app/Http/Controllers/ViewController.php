<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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

        array_push($names, 'Mike');

        $header = "People i like";

        return view('templates.layouts', compact('names', 'header'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $articles = \DB::table('articles')->paginate(3);

        return view('blog.index', compact('articles'));
    }

    public function view($id)
    {
        $article = \DB::table('articles')->where('id', $id)->first();

        return view('blog.view', compact('article'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $pagination = \DB::table('articles')->paginate(6);

        $articles = $pagination->chunk(3);

        return view('blog.index', compact('articles', 'pagination'));
    }

    public function view($id)
    {
        $article = \DB::table('articles')->where('id', $id)->first();

        if(! $article){
            abort(404);
        }

        return view('blog.view', compact('article'));
    }
}

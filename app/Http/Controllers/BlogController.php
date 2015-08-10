<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Http\Requests\ArticleRequest;

class BlogController extends Controller
{
    public function index()
    {
        $pagination = Article::published()->latest('published_at')->paginate(6);

        $articles = $pagination->chunk(3);

        return view('blog.index', compact('articles', 'pagination'));
    }

    public function view($id)
    {
        $article = Article::findOrFail($id);

        return view('blog.view', compact('article'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(ArticleRequest $request)
    {
        Article::create($request->all());

        session()->flash('success', 'Новость добавлена'); // $_SESSION['success'] = 'Новость добавлена'

        return redirect()->route('main');
    }

    public function test()
    {
        $response = new \Illuminate\Http\Response(view('welcome'));
        $response->withCookie(cookie('referrer', $request->referrer, 45000));
        return $response;
    }
}

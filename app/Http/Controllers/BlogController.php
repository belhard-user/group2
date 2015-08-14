<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Http\Requests\ArticleRequest;

class BlogController extends Controller
{
    /**
     * BlogController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
        $this->middleware('admin', ['only' => ['create', 'delete', 'update', 'store']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $pagination = Article::published()->latest('published_at')->paginate(6);

        $articles = $pagination->chunk(3);

        return view('blog.index', compact('articles', 'pagination'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('blog.create');
    }


    /**
     * @param ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ArticleRequest $request)
    {
        $request = array_add($request->all(), 'slug', $request['title']);
        $article  = new Article($request);
        \Auth::user()->articles()->save($article);

        session()->flash('success', 'Новость добавлена'); // $_SESSION['success'] = 'Новость добавлена'

        return redirect()->route('article.index');
    }


    /**
     * @param Article $article
     * @return \Illuminate\View\View
     */
    public function show(Article $article)
    {
        return view('blog.view', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Article $article
     * @return Response
     */
    public function edit(Article $article)
    {
        return view('blog.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ArticleRequest  $request
     * @param  Article $article
     * @return Response
     */
    public function update(ArticleRequest $request, Article $article)
    {
        $article->update($request->all());

        session()->flash('success', 'Запись '. $request->get('title') .' обновлена');

        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}

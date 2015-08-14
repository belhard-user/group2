@extends('templates.main')

@section('title', 'Главная страница моего блога')
@section('content')
    @include('errors.list')
    {!! Form::model($article, ["method" => "PUT", "route" => ["article.update", $article->slug]]) !!}
    @include('blog.form', ['buttonText' => 'Редактировать', 'tagsList' => $tagsList])
    {!! Form::close() !!}
@endsection
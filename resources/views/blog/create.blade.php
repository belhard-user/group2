@extends('templates.main')

@section('title', 'Главная страница моего блога')
@section('content')
        @include("errors.list")
        {!! Form::model($article = new \App\Article,["route" => "article.store"]) !!}
        @include('blog.form', ['buttonText' => 'Создать', 'tagsList' => $tagsList])
        {!! Form::close() !!}
@endsection
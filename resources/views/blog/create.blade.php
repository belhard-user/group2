@extends('templates.main')

@section('title', 'Главная страница моего блога')
@section('content')
        @include("errors.list")
        {!! Form::open(["route" => "article.store"]) !!}
        @include('blog.form', ['buttonText' => 'Создать'])
        {!! Form::close() !!}
@endsection
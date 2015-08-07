@extends('templates.main')

@section('title', $article->title)

@section('content')
    <h1>{{ $article->title }}</h1>
    <p class="text-center">
        {{ $article->body }}
    </p>
@endsection
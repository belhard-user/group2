@extends('templates.main')

@section('title', $article->title)

@section('content')
    <h1>
        {{ $article->title }}
        <small class="text-right text-muted">{{ $article->published_at->diffForHumans() }}</small>
    </h1>
    <p class="text-center">
        {{ $article->body }}
    </p>
@endsection
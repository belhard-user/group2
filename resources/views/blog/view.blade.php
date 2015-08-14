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
    @unless($article->tags->isEmpty())
    <h3>Теги:</h3>
    <hr>
    <ul class="list-unstyled">
        @foreach($article->tags as $tag)
            <li>{{ $tag->name }}</li>
        @endforeach
    </ul>
    @endunless
@endsection
@extends('templates.main')

@section('title', 'Главная страница моего блога')
@section('content')


<div class="row">
    @forelse($articles as $article)
    <div class="col-lg-4">
        <h2>{{ $article->title }}</h2>

        <p>{{ str_limit(nl2br($article->body), 260) }}</p>
        <p><a class="btn btn-primary" href="{{ route('view.blog', ['id' => $article->id]) }}" role="button">Глянуть »</a></p>
    </div>
    @empty
        <h3 class="text-muted">Нет записей в блоге</h3>
    @endforelse
</div>
    <div class="row">
        <div class="col-md-6 col-md-offset-4">{!! $articles->render() !!}</div>
    </div>
@endsection
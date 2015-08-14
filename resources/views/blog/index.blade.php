@extends('templates.main')

@section('title', 'Главная страница моего блога')
@section('content')

@forelse($articles as $row)
    <div class="row">
        @foreach($row as $article)
            <div class="col-md-4">
                <h2>{{ $article->title }}</h2>

                <p>{{ str_limit(nl2br($article->body), 260) }}</p>
                <p><a class="btn btn-primary" href="{{ route('article.show', ['id' => $article->slug]) }}" role="button">Глянуть »</a></p>
            </div>
        @endforeach
    </div>
@empty
    <h3>Нифига нету</h3>
@endforelse

<div class="row">
        <div class="col-md-6 col-md-offset-4">{!! $pagination->render() !!}</div>
</div>
@endsection
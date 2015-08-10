@extends('templates.main')

@section('content')
    <h1>Мой блог</h1>

    <div>
        Все записи <a href="{{ route('article.index') }}">тут</a>
    </div>
@endsection
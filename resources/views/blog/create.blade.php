@extends('templates.main')

@section('title', 'Главная страница моего блога')
@section('content')
    <form class="form-horizontal" action="{{ route('view.store') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <labal>Заголовок новости</labal>
            <input class="form-control" type="text" name="title">
        </div>
        <div class="form-group">
            <labal>Новость</labal>
            <textarea class="form-control" name="body" id="body" cols="30" rows="10"></textarea>
        </div>


        <div class="form-group">
            <labal>Заголовок новости</labal>
            <input class="form-control" type="date" name="published_at">
        </div>

        <input type="submit" class="btn btn-primary">
    </form>
@endsection
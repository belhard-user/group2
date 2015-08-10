@extends('templates.main')

@section('title', 'Главная страница моего блога')
@section('content')
        @if($errors->any())
            <ul class="alert alert-danger list-unstyled">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        @endif
        {!! Form::open(["route" => "article.store"]) !!}
        {{--  Name text field --}}
        <div class="form-group">
            {!! Form::label('title', 'Заголовок новости') !!}
            {!! Form::text('title', '', ['class' => 'form-control']) !!}
        </div>

        {{--  Body text field --}}
        <div class="form-group">
            {!! Form::label('body', 'Новость') !!}
            {!! Form::textarea('body', '', ['class' => 'form-control']) !!}
        </div>


        {{--  Published_at text field --}}
        <div class="form-group">
            {!! Form::label('published_at', 'Дата создания') !!}
            {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Создать', array('class' => 'form-control btn btn-success')) !!}
        </div>
        {!! Form::close() !!}
@endsection
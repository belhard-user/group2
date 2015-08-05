@extends('templates.main')


@section('title', 'update')

@section('content')
    <h1>Обновлено записей {{ $result }}</h1>
    <p>
        Name {{ $name->name }}<br/>
        Age {{ $name->age }}<br/>
        Email {{ $name->email}}<br/>
    </p>
@endsection
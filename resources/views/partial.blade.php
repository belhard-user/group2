@extends('templates.layouts')

@section('content')

@include('partials.widgets')

<ul>
    @forelse($names as $name)
        <li>{{ $name }}</li>
    @empty
        <h3>Нет имён</h3>
    @endforelse
</ul>
@endsection


@section('title', 'Hello world')

@section('style')
    <link rel="stylesheet" href=" {{ asset('css/style2.css') }}">
    @parent
@endsection
@extends('templates.main')

@section('content')
    <table class="table table-bordered table-responsive">
    @foreach($test as $t)
        <tr>
            <td>{{ $t->name }}</td>
            <td>{{ $t->email }}</td>
            <td>{{ $t->age }}</td>
            <td>{{ $t->country_code }}</td>
        </tr>
    @endforeach
    </table>

    {!! $test->render() !!}
@endsection
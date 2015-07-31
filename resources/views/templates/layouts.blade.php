<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Блог')</title>

    @section('style')
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @show
</head>
<body>

<h1>Блог</h1>
<div class="container">
    @yield('content')
    <section>
        @yield('tumba')
    </section>
</div>
</body>
</html>
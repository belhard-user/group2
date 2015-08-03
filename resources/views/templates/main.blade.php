<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Блог')</title>
    @section('style')
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @show
</head>
<body>
<div class="container">

    @include('partials.nav')

    <!-- Jumbotron -->
    <div class="jumbotron">
        <h1>Marketing stuff!</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>
    </div>

    <!-- Example row of columns -->
    @yield('content', 'Что - то случилось')

    <!-- Site footer -->
    <footer class="footer">
        <p>© Company 2014</p>
    </footer>

</div> <!-- /container -->

@section('script')
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
@show
</body>
</html>
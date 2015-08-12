<div class="masthead">
    <h3 class="text-muted">Блог</h3>
    <nav>
        <ul class="nav nav-justified">
            <li class="active"><a href="/">Главная</a></li>
            <li><a href="{{ route('article.create') }}">Добавить Запись</a></li>
            <li><a href="#">Contact</a></li>
            @if(! Auth::check())
                <li><a href="{{ url('/auth/login') }}">Вход</a></li>
                <li><a href="{{ url('/auth/register') }}">Регистрация</a></li>
            @else
                <li><a href="{{ url('/auth/logout') }}">Выход( {{ Auth::user()->name }} )</a></li>
            @endif
        </ul>
    </nav>
</div>
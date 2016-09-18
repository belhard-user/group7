<ul class="nav navbar-nav">
    <li class="active"><a href="/">Домой</a></li>
    <li><a href="{{ route('slaves.list') }}">Магаз</a></li>
    <li><a href="{{ route('slaves.category') }}">Категории</a></li>
    <li><a href="{{ route('slaves.photos') }}">Фотки</a></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
        <ul class="dropdown-menu">

            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
            @else
                <li><a href="{{ url('/logout') }}">Выход</a></li>
            @endif
        </ul>
    </li>

    <li><a href="{{ route('checkout') }}">Корзина ({{ $total }}) на сумму {{ $amount }}</a></li>
</ul>
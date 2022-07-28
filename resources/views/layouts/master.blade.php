<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title> @yield('title') </title>
    <meta name="description" content="description">
    <meta name="keywords" content="keywords">
    {{--    <link href="/css/normalize.css" rel="stylesheet">--}}
    <link href="/css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="template">
    <nav>
        <ul>
            <li @routeactive('index')><a href="{{route('index')}}">Все товары</a></li>
            <li @routeactive('categories')><a href="{{route('categories')}}">Категории</a></li>
            <li @routeactive('basket*')><a href="{{route('basket')}}">В корзину</a></li>
            <li><a href="{{route('reset')}}">Сбросить проект в первоначальное состояние</a></li>
        </ul>
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        {{--                        @if (Route::has('login'))--}}
                        {{--                            <li class="nav-item">--}}
                        {{--                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                        {{--                            </li>--}}
                        {{--                        @endif--}}

                        {{--                        @if (Route::has('register'))--}}
                        {{--                            <li class="nav-item">--}}
                        {{--                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                        {{--                            </li>--}}
                        {{--                        @endif--}}
                        {{--                    @else--}}
                        {{--                        <li class="nav-item dropdown">--}}
                        {{--                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"--}}
                        {{--                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                        {{--                                {{ Auth::user()->name }}--}}
                        {{--                            </a>--}}

                        {{--                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
                        {{--                                <a class="dropdown-item" href="{{ route('logout') }}"--}}
                        {{--                                   onclick="event.preventDefault();--}}
                        {{--                                                     document.getElementById('logout-form').submit();">--}}
                        {{--                                    {{ __('Logout') }}--}}
                        {{--                                </a>--}}

                        {{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
                        {{--                                    @csrf--}}
                        {{--                                </form>--}}
                        {{--                            </div>--}}
                        {{--                        </li>--}}
                        <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        <li><a href="{{ route('login') }}">Войти</a></li>
                    @endguest
                    @auth
                        @admin
                        <li><a href="{{ route('home') }}">Панель администратора</a></li>
                    @else
                        <li><a href="{{ route('person.orders.index') }}">Мои заказы</a></li>
                        @endadmin
                        <li><a href="{{ route('get-logout') }}">Выйти</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <div>
        @if(session()->has('success'))
            <p>{{ session()->get('success') }}</p>
        @endif
        @if(session()->has('warning'))
            <p>{{ session()->get('warning') }}</p>
        @endif

        @yield('content')
    </div>
</div>
</body>
</html>

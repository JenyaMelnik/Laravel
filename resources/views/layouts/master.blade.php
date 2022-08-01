<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title> @yield('title') </title>
    <meta name="description" content="description">
    <meta name="keywords" content="keywords">
    {{--    <link href="/css/normalize.css" rel="stylesheet">--}}
    <link href="/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="/css/starter-template.css" rel="stylesheet">
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

            <div id="navbarSupportedContent">
                <ul>
                    @guest
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

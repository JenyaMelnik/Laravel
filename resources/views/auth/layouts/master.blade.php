<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        @admin
        <a href="{{route('categories.index')}}">Категории</a>
        <a href="{{route('products.index')}}">Товары</a>
        <a href="{{route('home')}}">Заказы</a>
        @endadmin

            @auth
                @admin
                <li><a href="{{ route('home') }}">Панель администратора</a></li>
            @else
                <li><a href="{{ route('person.orders.index') }}">Мои заказы</a></li>
                @endadmin
                <li><a href="{{ route('get-logout') }}">Выйти</a></li>
            @endauth
        {{--            <div class="container">--}}
        {{--                <a class="navbar-brand" href="{{ url('/') }}">--}}
        {{--                    {{ config('app.name', 'Laravel') }}--}}
        {{--                </a>--}}
        {{--                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
        {{--                    <span class="navbar-toggler-icon"></span>--}}
        {{--                </button>--}}

        {{--                <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
        {{--                    <!-- Left Side Of Navbar -->--}}
        {{--                    <ul class="navbar-nav me-auto">--}}

        {{--                    </ul>--}}

        {{--                    <!-- Right Side Of Navbar -->--}}
        {{--                    <ul class="navbar-nav ms-auto">--}}
        {{--                        <!-- Authentication Links -->--}}
        {{--                        @guest--}}
        {{--                            @if (Route::has('login'))--}}
        {{--                                <li class="nav-item">--}}
        {{--                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
        {{--                                </li>--}}
        {{--                            @endif--}}

        {{--                            @if (Route::has('register'))--}}
        {{--                                <li class="nav-item">--}}
        {{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
        {{--                                </li>--}}
        {{--                            @endif--}}
        {{--                        @else--}}
        {{--                            <li class="nav-item dropdown">--}}
        {{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
        {{--                                    {{ Auth::user()->name }}--}}
        {{--                                </a>--}}

        {{--                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
        {{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
        {{--                                       onclick="event.preventDefault();--}}
        {{--                                                     document.getElementById('logout-form').submit();">--}}
        {{--                                        {{ __('Logout') }}--}}
        {{--                                    </a>--}}

        {{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
        {{--                                        @csrf--}}
        {{--                                    </form>--}}
        {{--                                </div>--}}
        {{--                            </li>--}}
        {{--                        @endguest--}}
        {{--                    </ul>--}}
        {{--                </div>--}}
        {{--            </div>--}}
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>

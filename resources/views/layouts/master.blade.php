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
<nav>
    <a href="{{route('index')}}">Все товары</a>
    <a href="{{route('categories')}}">Категории</a>
    <a href="{{route('basket')}}">В корзину</a>
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

</body>
</html>
